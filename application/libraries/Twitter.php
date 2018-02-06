<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 2/6/2018
 * Time: 9:00 AM
 */

require_once APPPATH . '../vendor/autoload.php';

class Twitter
{
    protected $twitter = null;
    protected $CI = null;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->config('auth');

    }

    public function login()
    {
        $this->twitter = new Abraham\TwitterOAuth\TwitterOAuth($this->CI->config->item('tw.consumer_key'), $this->CI->config->item('tw.consumer_secret'));
        try {
            $request_token = $this->twitter->oauth('oauth/request_token',
                                array(
                                    'oauth_callback' => base_url() . $this->CI->config->item('tw.callback_url')
                                ));
            if($this->twitter->getLastHttpCode() == 200)
            {
                $this->CI->session->set_userdata('oauth_token', $request_token['oauth_token']);
                $this->CI->session->set_userdata('oauth_token_secret', $request_token['oauth_token_secret']);
                $url = $this->twitter->url('oauth/authorize',
                            array(
                                'oauth_token'   => $request_token['oauth_token']
                            ));
                return $url;
            }
            return NULL;
        } catch (\Abraham\TwitterOAuth\TwitterOAuthException $e) {
            exit('Error '.$e->getCode().' with message '.$e->getMessage());
        }
    }

    public function callback()
    {
        $oauth_verifier = $this->CI->input->get('oauth_verifier');
        $oauth_token = $this->CI->session->userdata('oauth_token');
        $oauth_token_secret = $this->CI->session->userdata('oauth_token_secret');
        if( ! empty($oauth_token) && ! empty($oauth_token_secret) && ! empty($oauth_verifier))
        {
            $this->twitter = new Abraham\TwitterOAuth\TwitterOAuth(
                                $this->CI->config->item('tw.consumer_key'),
                                $this->CI->config->item('tw.consumer_secret'),
                                $oauth_token,
                                $oauth_token_secret
                            );
            try {
                $access_token = $this->twitter->oauth('oauth/access_token', array(
                    'oauth_verifier' => $oauth_verifier
                ));
                if($this->twitter->getLastHttpCode() == 200)
                {
                    $this->CI->session->unset_userdata('oauth_token');
                    $this->CI->session->unset_userdata('oauth_token_secret');
                    $this->CI->session->set_userdata('access_token', $access_token);
//                    var_dump($access_token);
                }
            } catch (\Abraham\TwitterOAuth\TwitterOAuthException $e) {
                exit('Error '.$e->getCode().' with message '.$e->getMessage());
            }
        }
        else
        {
            redirect(admin_url('login'));
        }
    }

    public function get_user_info()
    {
        if(($access_token = $this->CI->session->userdata('access_token')) != NULL)
        {
            $this->twitter = new Abraham\TwitterOAuth\TwitterOAuth(
                                $this->CI->config->item('tw.consumer_key'),
                                $this->CI->config->item('tw.consumer_secret'),
                                $access_token['oauth_token'],
                                $access_token['oauth_token_secret']
                            );
            $user_response = $this->twitter->get('account/verify_credentials',
                                        array(
                                            'include_email' => true,
                                            'include_entities'  => false,
                                            'skip_status'   => true
                                        ));
            if($this->twitter->getLastHttpCode() == 200)
            {
                $user_return = array();
                $user_return['name'] = $user_response->name;
                $user_return['email'] = property_exists($user_response, 'email') ? $user_response->email : $user_response->screen_name;
                $user_return['avatar'] = $user_response->profile_image_url_https;
                return $user_return;
            }
        }
        return NULL;
    }

}