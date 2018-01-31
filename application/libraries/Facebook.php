<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/31/2018
 * Time: 8:42 AM
 */

require APPPATH . '../vendor/autoload.php';
//require_once __DIR__.'../../vendor/facebook/graph-sdk/src/Facebook/autoload.php';

class Facebook
{
    protected $CI = null;
    protected $fb = null;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->config('auth');

        try {
            $this->fb = new \Facebook\Facebook(array(
                'app_id' => $this->CI->config->item('fb.app_id'),
                'app_secret' => $this->CI->config->item('fb.app_secret'),
                'default_graph_version' => $this->CI->config->item('fb.default_graph_version')
            ));
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            exit('Error: '. $e->getMessage());
        }
    }

    public function login()
    {
        if($this->fb != null)
        {
            $helper = $this->fb->getRedirectLoginHelper();
            $permission = array('email');
            return $helper->getLoginUrl(base_url() . $this->CI->config->item('fb.callback_url'), $permission);
        }
        return null;
    }

    public function callback()
    {
        if($this->fb != null)
        {
            $helper = $this->fb->getRedirectLoginHelper();
            try {
                $access_token = $helper->getAccessToken();
            } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                exit('Error: '.$e->getCode().' with message '.$e->getMessage());
            }
            $this->CI->session->set_userdata('fb_token', $access_token->getValue());
            return true;
        }
        return false;
    }

    public function get_access_token()
    {
        return ($this->CI->session->has_userdata('fb_token'))
                ? $this->CI->session->userdata('fb_token') : null;
    }

    public function get_user_info()
    {
        if($this->fb)
        {
            try {
                $response = $this->fb->get('/me?fields=id,name,email', $this->get_access_token());
                $user = $response->getGraphUser()->asArray();
                return $user;
            } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                exit('Error: ' . $e->getCode() . ' with message ' . $e->getMessage());
            }
        }
        return null;
    }

//    /**
//     * Get user's profile picture.
//     */
//    public function get_profile_pic( $user_id )
//    {
//        $this->get_session();
//        if ( $this->session )
//        {
//            $request = ( new FacebookRequest( $this->session, 'GET', '/' . $user_id . '/picture?redirect=false&type=large' ) )->execute();
//            $pic     = $request->getGraphObject()->asArray();
//
//            if ( ! empty( $pic ) && ! $pic['is_silhouette'] ) {
//                return $pic['url'];
//            }
//        }
//        return false;
//    }

}