{include file="../../partials/admin/head.tpl" title="Slides"}
{include file="../../partials/admin/topbar.tpl"}
{include file="../../partials/admin/sidebar.tpl"}

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">List Slides</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            {if isset($msg)}
                            <div class='alert alert-dismissable hidden'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                {$msg}
                            </div>
                            {/if}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {if $slides}
                                {html_table cols="ID,Title,Preview,Link,Created,Modified,Edit,Delete" loop=$slides table_attr=$table_attr td_attr=$td_attr}
                            {else}
                                <p class="text-center">No slides</p>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="../../partials/admin/foot.tpl"}
