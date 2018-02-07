<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 2/7/2018
 * Time: 2:19 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

if( ! function_exists('make_dir') )
{
    function make_dir($path)
    {
        if(is_array($path))
        {
            foreach ($path as $item)
            {
                make_dir($item);
            }
        }
        else
        {
            return is_dir($path) || mkdir($path);
        }
        return true;
    }
}