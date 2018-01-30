<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 12:04:22
         compiled from "C:\xampp\htdocs\demo\application\views\default\category\categories_admin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:193675a705136f22bb2_30397873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f991607c3321cc8e28680ed022c33148128e7804' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\category\\categories_admin\\index.tpl',
      1 => 1517310232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193675a705136f22bb2_30397873',
  'variables' => 
  array (
    'msg' => 0,
    'cats_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a70513703aad9_66639323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a70513703aad9_66639323')) {
function content_5a70513703aad9_66639323 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '193675a705136f22bb2_30397873';
echo $_smarty_tpl->getSubTemplate ("../../partials/admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Admin Home"), 0);
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
							<table id="example1" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>Group</th>
									<th>ID</th>
									<th>Name</th>
									<th>Parent</th>
									<th>Des</th>
									<th>Status</th>
									<th>Created date</th>
									<th>Modified date</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
								</thead>
								<tbody>
								<?php echo $_smarty_tpl->tpl_vars['cats_html']->value;?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">

		</div>
	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>