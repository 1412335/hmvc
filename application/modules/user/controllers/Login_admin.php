<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 5:21 PM
 */

class Login_admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('facebook');
        $this->load->library('form_validation');

        $this->load->model('user', 'user_model');
    }

    public function index()
    {
        if(($msg = $this->session->flashdata('msg')) != null)
        {
            $this->data['msg'] = $msg;
        }
        $this->data['fb_login_url'] = $this->facebook->login();

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
//        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false)
        {
            $this->data['errors'] = validation_errors();

            $this->parser->parse('admin/login.tpl', $this->data);
        }
        else
        {
//            $token = $this->session->userdata('fb_token');
            if(($user = $this->user_model->login($this->input->post('email'), $this->input->post('password'))) != false)
            {
                $this->session->set_userdata('user', $user);
                $this->session->set_flashdata('msg', 'Login successfully.');
                redirect(admin_home_url());
            }
            else
            {
                $this->data['errors'] = 'Email OR Password is not correct.';
                $this->parser->parse('admin/login.tpl', $this->data);
            }
        }
    }

    public function facebook_callback()
    {
        $this->facebook->callback();
        $user = $this->facebook->get_user_info();
        if($this->user_model->login_social($user))
        {
            $this->session->set_userdata('user', $user);
            redirect(admin_home_url());
        }
        else
        {
            $this->data['errors'] = 'Login failed. Try again.';
            $this->parser->parse('admin/login.tpl', $this->data);
        }
    }

}