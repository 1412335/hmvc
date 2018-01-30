<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 11:31:38
         compiled from "C:\xampp\htdocs\demo\application\views\default\user\admin\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:278415a70498a14ce60_37477016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2fbe03027e1d960813ba7839f002f683338e294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\user\\admin\\login.tpl',
      1 => 1517308244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278415a70498a14ce60_37477016',
  'variables' => 
  array (
    'base_url' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a70498a1b2ec8_48519354',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a70498a1b2ec8_48519354')) {
function content_5a70498a1b2ec8_48519354 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '278415a70498a14ce60_37477016';
echo $_smarty_tpl->getSubTemplate ("../../partials/admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Admin Login"), 0);
?>

<!-- iCheck -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
category"><b>Admin</b>management</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="" method="post">
            <?php if (isset($_smarty_tpl->tpl_vars['errors']->value) && $_smarty_tpl->tpl_vars['errors']->value) {?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

                </div>
            <?php }?>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="cb"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="signin">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/register" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>

<!-- jQuery 3 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    
<?php echo '</script'; ?>
>
</body>
<?php }
}
?>