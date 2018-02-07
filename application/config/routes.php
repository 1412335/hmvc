<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/articles/add'] = 'article/articles_admin/add';
$route['admin/articles/(:num)/edit'] = 'article/articles_admin/edit/$1';
$route['admin/articles/(:num)/delete'] = 'article/articles_admin/delete/$1';
$route['admin/articles/(:num)'] = 'article/articles_admin/preview/$1';
$route['admin/articles'] = 'article/articles_admin/index';
$route['articles/(:num)'] = 'article/articles/view/$1';
$route['articles/(:any)-(:num)'] = 'article/articles/view/$2';

$route['admin/categories/add'] = 'category/categories_admin/add';
$route['admin/categories/(:num)/edit'] = 'category/categories_admin/edit/$1';
$route['admin/categories/(:num)/delete'] = 'category/categories_admin/delete/$1';
$route['admin/categories/(:num)'] = 'category/categories_admin/preview/$1';
$route['admin/categories'] = 'category/categories_admin/index';
$route['categories/(:num)'] = 'category/categories/view/$1';

$route['admin/slides/add'] = 'slide/slides_admin/add';
$route['admin/slides/(:num)/edit'] = 'slide/slides_admin/edit/$1';
$route['admin/slides/(:num)/delete'] = 'slide/slides_admin/delete/$1';
$route['admin/slides'] = 'slide/slides_admin/index';

$route['admin/login'] = 'user/login_admin/index';
$route['admin/logout'] = 'user/logout_admin/index';
$route['admin/register'] = 'user/register_admin/index';

$route['admin/auth/fb/callback'] = 'user/login_admin/facebook_callback';
$route['admin/auth/gg/callback'] = 'user/login_admin/google_callback';
$route['admin/auth/tw/callback'] = 'user/login_admin/twitter_callback';

//$route['admin/(:any)'] = 'user/login_admin';

$route['home/(:num)'] = 'home/index/$1';