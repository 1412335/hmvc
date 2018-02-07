{include file="../../partials/admin/head.tpl" title="Edit Article"}
{include file="../../partials/admin/topbar.tpl"}
{include file="../../partials/admin/sidebar.tpl"}

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-warning box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Article: {$article.article_name}</h3>
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
								<label for="article_id">Article ID</label>
								<input type="text" class="form-control" name="article_id" id="article_id" disabled value="{$article.article_id}">
							</div>
							<div class="form-group">
								<label for="article_name">Article Name</label>
								<input type="text" class="form-control" name="article_name" onchange="change_to_slug();" id="article_name" value="{$article.article_name}" placeholder="Enter Article Name">
							</div>
							<div class="form-group">
								<label for="article_slug">Article Slug</label>
								<input type="text" class="form-control" name="article_slug" id="article_slug" value="{$article.article_slug}" placeholder="Enter Article Slug">
							</div>
							<div class="form-group">
								<label for="article_cat_id">Category</label>
								<select name="article_cat_id" id="article_cat_id" class="form-control select2" style="width: 100%;">
									<option value=''>-- Select category --</option>
									{html_options options=$cats selected=$article.article_cat_id}
								</select>
							</div>
							<div class="form-group">
								<label for="article_status">Status</label>
								<select name="article_status" id="article_status" class="form-control select2" style="width: 100%;">
									{html_options options=$status selected=$article.article_status}
								</select>
							</div>
							<div class="form-group">
								<label for="article_tags">Article Tags</label>
								<input type="text" class="form-control" name="article_tags" id="article_tags" value="{$article.article_tags}" placeholder="Enter Some Tags For Article">
							</div>
							<div class="form-group">
								<label for="article_image">Image</label>
								<img class="preview-img" id="article_preview_img" src="{$base_url}uploads/articles/{$article.article_thumbnail}" height="250" alt="Article Image">
								<input type="file" class="hidden" id="article_image" name="article_image">
							</div>
							<div class="form-group">
								<label for="article_des">Description</label>
								<textarea class="editor" id="article_des" name="article_des" rows="10" cols="80">{$article.article_des}</textarea>
							</div>
							<div class="form-group">
								<label for="article_content">Content</label>
								<textarea class="editor" id="article_content" name="article_content" rows="30" cols="80">{$article.article_content}</textarea>
							</div>
							<button type="submit" class="btn btn-danger btn-flat" name="edit">Save</button>
							<a href="{$base_url}admin/articles/{$article.article_id}" target="_blank" role="button" class="btn btn-flat btn-warning pull-right">Preview</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{include file="../../partials/admin/foot.tpl"}
