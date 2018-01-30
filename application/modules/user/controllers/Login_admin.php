<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 5:21 PM
 */

class Login_admin extends MY_Controller
{

    public function index()
    {
        $this->parser->parse('admin/login.tpl', $this->data);
    }

}