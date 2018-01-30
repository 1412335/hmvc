<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 10:58:41
         compiled from "C:\xampp\htdocs\demo\application\views\default\partials\head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:158655a7041d1d4c5c3_43039741%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3f9416b910b5c22afe2396843804a129293066' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\partials\\head.tpl',
      1 => 1517304534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158655a7041d1d4c5c3_43039741',
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a7041d1d55ef9_57801161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a7041d1d55ef9_57801161')) {
function content_5a7041d1d55ef9_57801161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '158655a7041d1d4c5c3_43039741';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body>

<?php }
}
?>