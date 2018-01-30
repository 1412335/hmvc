{include file="../../partials/admin/head.tpl" title="Articles"}
{include file="../../partials/admin/topbar.tpl"}
{include file="../../partials/admin/sidebar.tpl"}

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
							{if isset($msg) && $msg}
								<div class='alert alert-success'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									{$msg}
								</div>
							{/if}
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							{html_table cols="ID,Title,Category,Des,Status,Created,Modified,Edit,Delete" table_attr=$table_attr td_attr=$td_attr loop=$articles}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{include file="../../partials/admin/foot.tpl"}
