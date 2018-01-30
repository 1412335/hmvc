{include file="../../partials/admin/head.tpl" title="Admin Home"}
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
								{$cats_html}
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

{include file="../../partials/admin/foot.tpl"}
