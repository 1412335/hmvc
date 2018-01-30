{include file="../../partials/admin/head.tpl" title="New Article"}
{include file="../../partials/admin/topbar.tpl"}
{include file="../../partials/admin/sidebar.tpl"}

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
						<form action="" method="post" enctype="multipart/form-data" role="form">
							{if isset($errors) && $errors}
								<div class='alert alert-danger'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									{$errors}
								</div>
							{/if}
							<div class="form-group">
								<label for="article_name">Article Name</label>
								<input type="text" class="form-control" name="article_name" id="article_name" placeholder="Enter Article Name">
							</div>
							<div class="form-group">
								<label for="article_cat_id">Category</label>
								<select name="article_cat_id" id="article_cat_id" class="form-control select2" style="width: 100%;">
									<option value=''>-- Select category --</option>
									{html_options options=$cats}
								</select>
							</div>
							<div class="form-group">
								<label for="article_status">Status</label>
								<select name="article_status" id="article_status" class="form-control select2" style="width: 100%;">
									{html_options options=$status}
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

{include file="../../partials/admin/foot.tpl"}
