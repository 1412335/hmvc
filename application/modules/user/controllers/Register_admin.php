<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 5:22 PM
 */

class Register_admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('facebook');
        $this->load->library('google');
        $this->load->library('form_validation');

        $this->load->model('user', 'user_model');
    }

    public function index()
    {
        $this->data['fb_login_url'] = $this->facebook->login();
        $this->data['gg_login_url'] = $this->google->login();

        $this->form_validation->set_rules('name', 'Full name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.user_email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirm', 'trim|required|matches[password]');
        $this->form_validation->set_rules('cb', 'Terms', 'required');

        if($this->form_validation->run() == false)
        {
            $this->data['errors'] = validation_errors();
            $this->parser->parse('admin/register.tpl', $this->data);
        }
        else
        {
            if(($user = $this->user_model->register($this->input->post('name'), $this->input->post('email'), $this->input->post('password'))) != false)
            {
                $this->session->set_userdata('user', $user);
                $this->session->set_flashdata('msg', 'Register successfully.');
                redirect(admin_home_url());
            }
            else
            {
                $this->data['errors'] = 'Register failed.';
                $this->parser->parse('admin/register.tpl', $this->data);
            }
        }
    }


}