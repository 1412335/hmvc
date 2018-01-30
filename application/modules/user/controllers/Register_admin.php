<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 5:22 PM
 */

class Register_admin extends MY_Controller
{
    public function index()
    {
        $this->parser->parse('admin/register.tpl', $this->data);
    }
}