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

    public function __construct()
    {
        parent::__construct();
        $role = strtolower($this->uri->segment(1));
        $this->data['base_url'] = base_url();

        switch ($role)
        {
            case 'admin':
                $this->load->helper('admin');

                $controller = strtolower($this->uri->segment(2));
                if($this->_is_authenticated())
                {
                    if($controller == 'login' || $controller == 'register')
                    {
                        redirect(admin_home_url());
                    }
                }
                else if($controller != 'login' && $controller != 'register')
                {
//                    redirect(admin_url('login'));
                }
                return;
            default:
                return;
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