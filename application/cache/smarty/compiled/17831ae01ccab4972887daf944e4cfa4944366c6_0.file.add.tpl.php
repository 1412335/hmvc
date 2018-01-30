<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 10:47:52
         compiled from "C:\xampp\htdocs\demo\application\views\default\article\articles_admin\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194675a703f486de2b5_13447091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17831ae01ccab4972887daf944e4cfa4944366c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\article\\articles_admin\\add.tpl',
      1 => 1517304236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194675a703f486de2b5_13447091',
  'variables' => 
  array (
    'base_url' => 0,
    'errors' => 0,
    'cats' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a703f487af250_12071883',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a703f487af250_12071883')) {
function content_5a703f487af250_12071883 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\demo\\application\\third_party\\Smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '194675a703f486de2b5_13447091';
echo $_smarty_tpl->getSubTemplate ("../../partials/admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"New Article"), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../../partials/admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-warning box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">New Article</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="col-md-12">
						<form action=<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tpl/article/add method="post" enctype="multipart/form-data" role="form">
							<?php if (isset($_smarty_tpl->tpl_vars['errors']->value) && $_smarty_tpl->tpl_vars['errors']->value) {?>
								<div class='alert alert-danger'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

								</div>
							<?php }?>
							<div class="form-group">
								<label for="article_name">Article Name</label>
								<input type="text" class="form-control" name="article_name" id="article_name" placeholder="Enter Article Name">
							</div>
							<div class="form-group">
								<label for="article_cat_id">Category</label>
								<select name="article_cat_id" id="article_cat_id" class="form-control select2" style="width: 100%;">
									<option value=''>-- Select category --</option>
									<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cats']->value),$_smarty_tpl);?>

								</select>
							</div>
							<div class="form-group">
								<label for="article_status">Status</label>
								<select name="article_status" id="article_status" class="form-control select2" style="width: 100%;">
									<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>

								</select>
							</div>
							<div class="form-group">
								<label for="article_tags">Article Tags</label>
								<input type="text" class="form-control" name="article_tags" id="article_tags" placeholder="Enter Some Tags For Article">
							</div>
							<div class="form-group">
								<label for="article_image">Image</label>
								<input type="file" class="form-control" id="article_image" name="article_image">
							</div>
							<div class="form-group">
								<label for="article_des">Description</label>
								<textarea id="article_des" name="article_des" rows="10" cols="80">Short description...</textarea>
							</div>
							<div class="form-group">
								<label for="article_content">Content</label>
								<textarea id="article_content" name="article_content" rows="10" cols="80">Content of this article...</textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-flat" name="add">Save</button>
						</form>
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