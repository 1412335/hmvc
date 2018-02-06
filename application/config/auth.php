<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/31/2018
 * Time: 8:49 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

$config['fb.app_id'] = '852984138196039';
$config['fb.app_secret'] = '36b2eb2bb514ae9659065819cc0de8e5';
$config['fb.default_graph_version'] = 'v2.10';
$config['fb.callback_url'] = 'admin/auth/fb/callback';

$config['gg.client_secret'] = APPPATH . 'config/google.json';
$config['gg.access_type'] = 'offline';
$config['gg.client_scope'] = array('email', 'profile');
$config['gg.callback_url'] = 'admin/auth/gg/callback';

$config['tw.consumer_key'] = '6cQL8dbgNtnYageuGYD05aIY1';
$config['tw.consumer_secret'] = 'wBDy82rVN8HVMzrSF7518FOpcplVu9AiMqL8W0QOPao5irlrj7';
$config['tw.callback_url'] = 'admin/auth/tw/callback';