<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 10:45:16
         compiled from "C:\xampp\htdocs\demo\application\views\default\article\articles_admin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:90525a703eace8f545_20135452%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b70154c5bbd3adf93e44e9a59d5ab8df48031da2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\article\\articles_admin\\index.tpl',
      1 => 1517304178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90525a703eace8f545_20135452',
  'variables' => 
  array (
    'msg' => 0,
    'table_attr' => 0,
    'td_attr' => 0,
    'articles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a703ead0047d8_41280857',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a703ead0047d8_41280857')) {
function content_5a703ead0047d8_41280857 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_table')) require_once 'C:\\xampp\\htdocs\\demo\\application\\third_party\\Smarty\\plugins\\function.html_table.php';

$_smarty_tpl->properties['nocache_hash'] = '90525a703eace8f545_20135452';
echo $_smarty_tpl->getSubTemplate ("../../partials/admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Articles"), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-success box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Categories List</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<?php if (isset($_smarty_tpl->tpl_vars['msg']->value) && $_smarty_tpl->tpl_vars['msg']->value) {?>
								<div class='alert alert-success'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

								</div>
							<?php }?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php echo smarty_function_html_table(array('cols'=>"ID,Title,Category,Des,Status,Created,Modified,Edit,Delete",'table_attr'=>$_smarty_tpl->tpl_vars['table_attr']->value,'td_attr'=>$_smarty_tpl->tpl_vars['td_attr']->value,'loop'=>$_smarty_tpl->tpl_vars['articles']->value),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>