{include file="../../partials/admin/head.tpl" title="Admin Register"}
<!-- iCheck -->
<link rel="stylesheet" href="{$base_url}assets/AdminLTE/plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{$base_url}category"><b>Admin</b>management</a>
    </div>
    <!-- /.login-logo -->
    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="" method="post">
            {if isset($errors) && $errors}
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {$errors}
                </div>
            {/if}
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="name" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="passconf" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            {*<div class="row">*}
                {*<div class="col-xs-6">*}
                    {*<div class="input-group">*}
                        {*<input type="text" class="form-control" name="captcha" placeholder="Type captcha">*}
                        {*<div class="input-group-addon">*}
                            {*<i class="fa fa-refresh" onclick="refresh_captcha();"></i>*}
                        {*</div>*}
                    {*</div>*}
                {*</div>*}
                {*<!-- /.col -->*}
                {*<div class="col-xs-6">*}
                    {*<div class="form-group has-feedback">*}
                        {*<div id="captcha">*}
                            {*{$captcha}*}
                        {*</div>*}
                    {*</div>*}
                {*</div>*}
                {*<!-- /.col -->*}
            {*</div>*}
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="cb"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="{$fb_login_url}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                Facebook</a>
            <a href="{$gg_login_url}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                Google+</a>
            <a href="{$tw_login_url}" class="btn btn-block btn-social btn-flat btn-twitter"><i class="fa fa-twitter"></i> Sign up using Twitter</a>
        </div>

        <a href="{$base_url}admin/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.login-box-body -->
</div>

<!-- jQuery 3 -->
<script src="{$base_url}assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{$base_url}assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{$base_url}assets/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script>
    var base_url = '{$base_url}';
    {literal}
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    function refresh_captcha() {
        $.ajax({
            url: base_url + '/admin/captcha/refresh',
            type: 'GET',
            success: function (result) {
                $('#captcha').html(result);
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
    {/literal}
</script>
</body>
