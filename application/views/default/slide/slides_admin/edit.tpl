{include file="../../partials/admin/head.tpl" title="Add Slide"}
{include file="../../partials/admin/topbar.tpl"}
{include file="../../partials/admin/sidebar.tpl"}

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Slide: {$slide.slide_title}</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <form action="" method="post" id="form-slide" enctype="multipart/form-data" role="form">
                            <div class='alert alert-dismissable hidden'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            </div>
                            <div class="form-group">
                                <label for="slide_title">Slide Name</label>
                                <input type="text" class="form-control" name="slide_title" id="slide_title" value="{$slide.slide_title}" placeholder="Enter Slide title">
                            </div>
                            <div class="form-group">
                                <label for="slide_url">Slide URL</label>
                                <input type="text" class="form-control" name="slide_url" id="slide_url" value="{$slide.slide_url}" placeholder="Enter URL">
                            </div>
                            <div class="form-group">
                                <label for="slide_status">Slide Status</label>
                                <select name="slide_status" id="slide_status" class="form-control select2">
                                    {html_options options=$status selected=$slide.slide_status}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="slide_img">Image</label>
                                <input type="file" class="form-control" id="slide_img" name="slide_img">
                            </div>
                            <div class="form-group">
                                <label for="slide_img_preview">Preview</label>
                                <div class="text-center">
                                    <img src="{$base_url}uploads/slides/{$slide.slide_path}" id="slide_img_preview" height="200" class="img-preview img-responsive img-bordered" style="margin: auto;">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat" id="edit" name="edit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="../../partials/admin/foot.tpl"}