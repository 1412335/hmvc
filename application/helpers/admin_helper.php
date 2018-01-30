<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 3:32 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

if( ! function_exists('admin_url'))
{
    function admin_url($url = '')
    {
        return base_url() . 'admin/' . $url;
    }
}

if( ! function_exists('admin_home_url'))
{
    function admin_home_url()
    {
        return base_url() . 'admin/category';
    }
}
