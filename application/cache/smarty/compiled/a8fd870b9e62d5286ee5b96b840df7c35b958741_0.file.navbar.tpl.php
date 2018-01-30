<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 11:52:25
         compiled from "C:\xampp\htdocs\demo\application\views\default\partials\navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11875a704e69e5aa79_06109618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8fd870b9e62d5286ee5b96b840df7c35b958741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\partials\\navbar.tpl',
      1 => 1517307492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11875a704e69e5aa79_06109618',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a704e69e60c08_40800888',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a704e69e60c08_40800888')) {
function content_5a704e69e60c08_40800888 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11875a704e69e5aa79_06109618';
?>

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login"><i class="fa fa-unlock"></i>  Login</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register"><i class="fa fa-lock"></i> Register</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav><?php }
}
?>