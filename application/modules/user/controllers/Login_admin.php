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
        $this->load->library('google');
        $this->load->library('twitter');

        $this->load->library('form_validation');

        $this->load->model('user', 'user_model');

        $this->load->helper('captcha');
    }

    public function index()
    {
        if(($msg = $this->session->flashdata('msg')) != null)
        {
            $this->data['msg'] = $msg;
        }
        $this->data['fb_login_url'] = $this->facebook->login();
        $this->data['gg_login_url'] = $this->google->login();
        $this->data['tw_login_url'] = $this->twitter->login();

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
//        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_verify_captcha');

        if($this->form_validation->run() == false)
        {
            $this->data['errors'] = validation_errors();

            $array = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));

            $vals = array(
                'img_url' => base_url() . '/uploads/captcha/',
                'img_path' => APPPATH . '../uploads/captcha/',
                'img_width' => 145,
                'img_height' => 34
            );
            $captcha = create_captcha($vals);
            $this->data['captcha'] = $captcha['image'];
            if($this->session->has_userdata('captcha') && file_exists(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']))
            {
                unlink(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']);
            }
            $this->session->set_userdata('captcha', $captcha);

            $this->parser->parse('admin/login.tpl', $this->data);
        }
        else
        {
//            $token = $this->session->userdata('fb_token');
            if(($user = $this->user_model->login($this->input->post('email'), $this->input->post('password'))) != false)
            {
                $this->session->set_userdata('user', $user);
                $this->session->set_flashdata('msg', 'Login successfully.');
                if(file_exists(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']))
                {
                    unlink(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']);
                }
                $this->session->unset_userdata('captcha');

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
        $user['avatar'] = $this->facebook->get_user_picture($user['id']);
        $this->insert_user($user);
    }

    public function google_callback()
    {
        $code = $this->input->get('code');
        $this->google->callback($code);
        $user = $this->google->get_user_info();
        $this->insert_user($user);
    }

    public function twitter_callback()
    {
        $this->twitter->callback();
        $user = $this->twitter->get_user_info();
        $this->insert_user($user);
    }

    private function insert_user($user)
    {
        if($this->user_model->login_social($user))
        {
            $this->session->set_userdata('user', $user);
            $this->session->set_flashdata('msg', 'Login successfully.');
            redirect(admin_home_url());
        }
        else
        {
            $this->data['errors'] = 'Login failed. Try again.';
            $this->parser->parse('admin/login.tpl', $this->data);
        }
    }

    public function verify_captcha($word)
    {
        if($this->session->has_userdata('captcha') && $word !== $this->session->userdata('captcha')['word'])
        {
            $this->form_validation->set_message('verify_captcha', 'Captcha is not correct.');
            return false;
        }
        return true;
    }

    public function refresh_captcha()
    {
        $vals = array(
            'img_url' => base_url() . '/uploads/captcha/',
            'img_path' => APPPATH . '../uploads/captcha/',
            'img_width' => 145,
            'img_height' => 34
        );
        $captcha = create_captcha($vals);
        if($this->session->has_userdata('captcha') && file_exists(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']))
        {
            unlink(APPPATH . '../uploads/captcha/' . $this->session->userdata('captcha')['filename']);
        }
        $this->session->set_userdata('captcha', $captcha);
        echo $captcha['image'];
    }

}