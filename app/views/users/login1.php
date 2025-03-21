<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Ykredi Finance | Login</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="Login Page" name="description" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/css/default/style.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=URLROOT?>/ui/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/ui/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

</head>

<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <div class="login-cover">
        <div class="login-cover-image" style="background-image: url(<?=URLROOT?>/ui/img/login-bg/bg.jpg)" data-id="login-cover-image"></div>
        <div class="login-cover-bg"></div>
    </div>
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>Secure Online Banking
                    <small>provide correct login details to access dashboard</small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">

                <small>
                        
                </small>
                <small>
                                    </small>
                <small>
                                    </small>
                <form id="loginForm" action="<?=URLROOT?>/users/login"  method="POST" class="margin-bottom-0">
                <?= flash('register_success'); ?>
                   <div class="form-group m-b-20">
                        <input type="text" class="form-control form-control-lg <?= (!empty($data['accountid_err'])) ? 'is-invalid' : ''; ?>" id="accountid" name="accountid" value="<?= $data['accountid']; ?>" required placeholder="Account ID">
                        <span class="invalid-feedback"><?= $data['accountid_err']; ?></span>
                    </div>
                    <div class="form-group m-b-20">
                

                        <input type="password" class="form-control form-control-lg <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['password']; ?>" id="password" name="password" required placeholder="Password">
      <span class="invalid-feedback"><?= $data['password_err']; ?></span>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                    <div class="m-t-20">
                        Not yet a customer? Click <a href="<?=URLROOT?>/users/apply">here</a> to apply.
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
        
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=URLROOT?>/ui/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=URLROOT?>/ui/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?=URLROOT?>/ui/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="https://ykredifinance.com/assets/ui/crossbrowserjs/html5shiv.js"></script>
		<script src="https://ykredifinance.com/assets/ui/crossbrowserjs/respond.min.js"></script>
		<script src="https://ykredifinance.com/assets/ui/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=URLROOT?>/ui/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=URLROOT?>/ui/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=URLROOT?>/ui/js/theme/default.min.js"></script>
	<script src="<?=URLROOT?>/ui/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=URLROOT?>/ui/js/demo/login-v2.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
</body>

</html>