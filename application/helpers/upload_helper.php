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

if( ! function_exists('is_empty_dir') )
{
    function is_empty_dir($path)
    {
        return empty(glob("$path/*")) ? true : false;
    }
}

if( ! function_exists('remove_file_uploaded') )
{
    function remove_file_uploaded($path)
    {
        if(file_exists($path))
        {
            unlink($path);
        }
        $dir_path_lv1 = substr($path, 0, strrpos($path, '/'));
        $dir_path_lv2 = substr($dir_path_lv1, 0, strrpos($dir_path_lv1, '/'));
        $dir_path_lv3 = substr($dir_path_lv2, 0, strrpos($dir_path_lv2, '/'));

        if(is_empty_dir($dir_path_lv1))
        {
            rmdir($dir_path_lv1);
        }
        if(is_empty_dir($dir_path_lv2))
        {
            rmdir($dir_path_lv2);
        }
        if(is_empty_dir($dir_path_lv3))
        {
            rmdir($dir_path_lv3);
        }
    }
}