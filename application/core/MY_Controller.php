<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 3:29 PM
 */

class MY_Controller extends CI_Controller
{
    protected $data = null;
    protected $status = array(
        PUBLIC_STATUS	=> 'public',
        UN_PUBLIC_STATUS	=> 'unpublic'
    );

    public function __construct()
    {
        parent::__construct();
        $role = strtolower($this->uri->segment(1));
        $this->data['base_url'] = base_url();
        $this->data['status'] = $this->status;

        switch ($role)
        {
            case 'admin':
                $this->load->helper('admin');

                $controller = strtolower($this->uri->segment(2));
                if($this->_is_authenticated())
                {
                    $this->data['user'] = $this->session->userdata('user');
                    if($controller == 'login' || $controller == 'register')
                    {
                        redirect(admin_home_url());
                    }
                }
                else if($controller != 'login' && $controller != 'register' && $controller != 'auth')
                {
                    redirect(admin_url('login'));
                }
                break;
            default:
                break;
        }
    }

    private function _is_authenticated()
    {
        if(($user = $this->session->userdata('user')) != NULL)
        {
            return TRUE;
        }
        return FALSE;
    }

}