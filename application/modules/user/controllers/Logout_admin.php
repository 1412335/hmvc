<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/31/2018
 * Time: 11:15 AM
 */

class Logout_admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('facebook');

        $this->load->model('user', 'user_model');
    }

    public function index()
    {
        if($this->session->has_userdata('user'))
        {
            $this->session->unset_userdata('user');
            $this->session->set_flashdata('msg', 'Logout successfully.');
            redirect(admin_url('login'));
        }
    }
}