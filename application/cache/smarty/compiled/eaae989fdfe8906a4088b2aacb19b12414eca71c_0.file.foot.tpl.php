<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 11:53:20
         compiled from "C:\xampp\htdocs\demo\application\views\default\partials\foot.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195585a704ea02e9a17_09897984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaae989fdfe8906a4088b2aacb19b12414eca71c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\partials\\foot.tpl',
      1 => 1517309598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195585a704ea02e9a17_09897984',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a704ea03389f2_36097114',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a704ea03389f2_36097114')) {
function content_5a704ea03389f2_36097114 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '195585a704ea02e9a17_09897984';
?>
<footer class="main-footer" style="margin-left: 0px; position: absolute; bottom: 0px; width: 100%;">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
</footer>

<!-- jQuery 3 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/dist/js/demo.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>