<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/31/2018
 * Time: 4:52 PM
 */

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->parser->parse('index.tpl', $this->data);
    }
}