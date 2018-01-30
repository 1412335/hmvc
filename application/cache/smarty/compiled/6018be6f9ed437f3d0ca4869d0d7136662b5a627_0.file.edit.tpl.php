<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 12:08:23
         compiled from "C:\xampp\htdocs\demo\application\views\default\category\categories_admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:51175a705227c63505_69161296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6018be6f9ed437f3d0ca4869d0d7136662b5a627' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\category\\categories_admin\\edit.tpl',
      1 => 1517310502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51175a705227c63505_69161296',
  'variables' => 
  array (
    'cat' => 0,
    'errors' => 0,
    'cats' => 0,
    'cats_status' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a705227cd3a20_57759574',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a705227cd3a20_57759574')) {
function content_5a705227cd3a20_57759574 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\demo\\application\\third_party\\Smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '51175a705227c63505_69161296';
echo $_smarty_tpl->getSubTemplate ("../../partials/admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Edit Category"), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Category: <?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
					<!-- /.box-tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="col-md-12">
						<form action="" method="post" enctype="multipart/form-data" role="form">
							<?php if (isset($_smarty_tpl->tpl_vars['errors']->value) && $_smarty_tpl->tpl_vars['errors']->value) {?>
								<div class='alert alert-danger alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

								</div>
							<?php }?>
							<div class="form-group">
								<label for="cat_id">Category ID</label>
								<input type="text" class="form-control" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
" id="cat_id" disabled>
							</div>
							<div class="form-group">
								<label for="cat_name">Category Name</label>
								<input type="text" class="form-control" name="cat_name" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
" id="cat_name" placeholder="Enter Category Name">
							</div>
							<div class="form-group">
								<label for="cat_parent_id">Category Parent</label>
								<select name="cat_parent_id" id="cat_parent_id" class="form-control select2" style="width: 100%;">
									<option value='0'>-- Select category parent --</option>
									<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cats']->value,'selected'=>$_smarty_tpl->tpl_vars['cat']->value['cat_parent_id']),$_smarty_tpl);?>

								</select>
							</div>
							<div class="form-group">
								<label for="cat_status">Category Status</label>
								<select name="cat_status" id="cat_status" class="form-control select2">
									<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cats_status']->value,'selected'=>$_smarty_tpl->tpl_vars['cat']->value['cat_status']),$_smarty_tpl);?>

								</select>
							</div>
							<div class="form-group">
								<label for="cat_thumbnail">Image</label>
								<img class="preview-img" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploads/categories/<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_thumbnail'];?>
" height="250" alt="Cat Image">
								<input type="file" class="form-control hidden" id="cat_thumbnail" name="cat_thumbnail">
							</div>
							<div class="form-group">
								<label for="cat_des">Description</label>
								<textarea id="cat_des" name="cat_des" rows="10" cols="80"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_des'];?>
</textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-flat" name="edit">Save</button>
						</form>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>