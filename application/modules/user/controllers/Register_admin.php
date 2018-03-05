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
        $this->load->library('twitter');

        $this->load->library('form_validation');

        $this->load->helper('captcha');

        $this->load->model('user', 'user_model');
    }

    public function index()
    {
        $this->data['fb_login_url'] = $this->facebook->login();
        $this->data['gg_login_url'] = $this->google->login();
        $this->data['tw_login_url'] = $this->twitter->login();

        $this->form_validation->set_rules('name', 'Full name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.user_email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirm', 'trim|required|matches[password]');
        $this->form_validation->set_rules('cb', 'Terms', 'required');

        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_verify_captcha');

        if($this->form_validation->run() == false)
        {
            $this->data['errors'] = validation_errors();

            $vals = array(
                'img_path' => APPPATH . '../uploads/captcha/',
                'img_url' => base_url() . 'uploads/captcha/',
                'img_width' => 145,
                'img_height' => 34
            );
            $captcha = create_captcha($vals);
            if($this->session->has_userdata('captcha') && file_exists(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']))
            {
                unlink(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']);
            }
            $this->session->set_userdata('captcha', $captcha);
            $this->data['captcha'] = $captcha['image'];

            $this->parser->parse('admin/register.tpl', $this->data);
        }
        else
        {
            if(($user = $this->user_model->register($this->input->post('name'), $this->input->post('email'), $this->input->post('password'))) != false)
            {
                $this->session->set_userdata('user', $user);
                $this->session->set_flashdata('msg', 'Register successfully.');
                if($this->session->has_userdata('captcha') && file_exists(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']))
                {
                    unlink(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']);
                }
                $this->session->unset_userdata('captcha');

                redirect(admin_home_url());
            }
            else
            {
                $this->data['errors'] = 'Register failed.';
                $this->parser->parse('admin/register.tpl', $this->data);
            }
        }
    }

    public function verify_captcha($captcha)
    {
        if($this->session->has_userdata('captcha') && $this->session->userdata('captcha')['word'] !== $captcha)
        {
            $this->form_validation->set_message('verify_captcha', 'Captcha is not correct.');
            return false;
        }
        return true;
    }
}