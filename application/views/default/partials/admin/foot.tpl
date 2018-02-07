		</div><!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.0
			</div>
			<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
		</footer>
		</div><!-- ./wrapper -->
		{*<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*}

        <!-- jQuery 3 -->
        <script src="{$base_url}assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
		<script src="{$base_url}assets/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="{$base_url}assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Morris.js charts -->
		<script src="{$base_url}assets/AdminLTE/bower_components/raphael/raphael.min.js"></script>
		<script src="{$base_url}assets/AdminLTE/bower_components/morris.js/morris.min.js"></script>
		<!-- Sparkline -->
		<script src="{$base_url}assets/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
		<!-- jvectormap -->
		<script src="{$base_url}assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="{$base_url}assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="{$base_url}assets/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="{$base_url}assets/AdminLTE/bower_components/moment/min/moment.min.js"></script>
		<script src="{$base_url}assets/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- datepicker -->
		<script src="{$base_url}assets/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="{$base_url}assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<!-- Select2 -->
		<script src="{$base_url}assets/AdminLTE/bower_components/select2/dist/js/select2.full.min.js"></script>
		<!-- DataTables -->
		<script src="{$base_url}assets/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="{$base_url}assets/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<!-- Slimscroll -->
		<script src="{$base_url}assets/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="{$base_url}assets/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="{$base_url}assets/AdminLTE/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		{*<script src="{$base_url}assets/AdminLTE/dist/js/pages/dashboard.js"></script>*}
		{*<!-- AdminLTE for demo purposes -->*}
		<script src="{$base_url}assets/AdminLTE/dist/js/demo.js"></script>
		<!-- CK Editor -->
		<script src="{$base_url}assets/AdminLTE/bower_components/ckeditor/ckeditor.js"></script>
		<!-- CK Finder -->
		<script src="{$base_url}assets/AdminLTE/bower_components/ckfinder/ckfinder.js"></script>

		<script>
			var base_url = '{$base_url}';
			{literal}
			$(function() {
				$('#example1').DataTable();
				$('.select2').select2();

				$('textarea.editor').each(function (e) {
                    var editor = CKEDITOR.replace(this.id, {
                        filebrowserBrowseUrl : base_url + "assets/AdminLTE/bower_components/ckfinder/ckfinder.html",
                        filebrowserImageBrowseUrl : base_url + "assets/AdminLTE/bower_components/ckfinder/ckfinder.html?Type=Images",
                        filebrowserFlashBrowseUrl : base_url + "assets/AdminLTE/bower_components/ckfinder/ckfinder.html?Type=Flash",
                        filebrowserUploadUrl : base_url + "assets/AdminLTE/bower_components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
                        filebrowserImageUploadUrl : base_url + "assets/AdminLTE/bower_components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
                        filebrowserFlashUploadUrl : base_url + "assets/AdminLTE/bower_components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash",
                        filebrowserWindowWidth : '800',
                        filebrowserWindowHeight : '480',
						height: (this.id.indexOf('content') > 0) ? 800 : 300
                    });
                    CKFinder.setupCKEditor(editor, base_url + "assets/AdminLTE/bower_components/ckfinder/");
                });

			});
			function change_to_slug()
			{
				var str = $('#article_name').val();
				str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/gi, "a");
				str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/gi, "e");
				str = str.replace(/ì|í|ị|ỉ|ĩ/gi, "i");
				str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/gi, "o");
				str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/gi, "u");
				str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/gi, "y");
				str = str.replace(/đ/gi, "d");
				str = str.trim();
                str = str.replace(/[^0-9a-zA-Z]/g, ' ');
				str = str.replace(/\s+/g, '-');
				str = str.toLowerCase();
				$('#article_slug').val(str);
			}

            $(document).ready(function () {

                $('#form-slide').on('submit', function (e) {
                    e.preventDefault();
                    $('.alert').removeClass('hidden alert-danger').addClass('alert-success').html('Loading...');
                    var data = new FormData(this);
                    $.ajax({
                        url: window.location.href,
                        type: "POST",
                        data: data,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            result = JSON.parse(result);
                            if(result['error'] === 1)
                            {
                                $('.alert').removeClass('hidden alert-success').addClass('alert-danger').html(result['msg']);
                            }
                            else
                            {
                                $('.alert').removeClass('hidden alert-danger').addClass('alert-success').html(result['msg']);
                            }
                        },
                        error: function (error) {
                            console.log(error);
                            $('.alert').removeClass('hidden alert-success').addClass('alert-danger').html(error);
                        }
                    })
                });

                $('#slide_img').on('change', function () {
                    if(this.files[0])
                    {
                        var file = this.files[0];
                        var file_type = file.type.split('/')[1];
                        var allow_types = ['jpeg', 'png', 'jpg'];
                        if(allow_types.indexOf(file_type) > -1)
                        {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('.alert').addClass('hidden');
                                $('#slide_img_preview').attr('src', e.target.result);
                            };
                            reader.readAsDataURL(file);
                        }
                        else
                        {
                            $('.alert').removeClass('hidden alert-success').addClass('alert-danger').html('File is not a image.');
                        }
                    }
                });
            });
            {/literal}
        </script>

		</body>
</html>
