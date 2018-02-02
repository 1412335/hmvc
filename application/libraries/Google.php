<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 2/2/2018
 * Time: 11:07 AM
 */

require_once APPPATH . '../vendor/autoload.php';

class Google
{
    protected $client = null;
    protected $CI = null;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->config('auth');

        try {
            $guzzle_client = new GuzzleHttp\Client(['verify' => false]);
            $this->client = new Google_Client();
            $this->client->setHttpClient($guzzle_client);
            $this->client->setAuthConfig($this->CI->config->item('gg.client_secret'));
            $this->client->setAccessType($this->CI->config->item('gg.access_type'));
            $this->client->setScopes($this->CI->config->item('gg.client_scope'));
            $this->client->setRedirectUri(base_url() . $this->CI->config->item('gg.callback_url'));
        } catch (Google_Exception $e) {
            exit('Error: '.$e->getCode().' with message '.$e->getMessage());
        }
    }

    public function login()
    {
        if($this->client)
        {
            return $this->client->createAuthUrl();
        }
        return NULL;
    }

    public function callback($code = '')
    {
        if($this->client)
        {
            if(isset($code) && ! empty($code))
            {
                $this->client->authenticate($code);
                $this->client->getAccessToken();
                return true;
            }
            else
            {
                $auth_url = $this->client->createAuthUrl();
                redirect($auth_url);
            }
        }
        return false;
    }

    public function get_user_info()
    {
        $google_auth = new Google_Service_Oauth2($this->client);
        $user = array();
        $user['email'] = $google_auth->userinfo->get()->email;
        $user['name'] = $google_auth->userinfo->get()->name;
        return $user;
    }

}