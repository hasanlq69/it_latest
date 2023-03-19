<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | IT Desk | Saloka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('itdesk/img/loka.ico')); ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/bootstrap.min.css')); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/font-awesome.min.css')); ?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/owl.theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/owl.transitions.css')); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/animate.css')); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/normalize.css')); ?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/main.css')); ?>">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/morrisjs/morris.css')); ?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/scrollbar/jquery.mCustomScrollbar.min.css')); ?>">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/metisMenu/metisMenu.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/metisMenu/metisMenu-vertical.css')); ?>">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/calendar/fullcalendar.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/calendar/fullcalendar.print.min.css')); ?>">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/form/all-type-forms.css')); ?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/style.css')); ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('itdesk/css/responsive.css')); ?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO IT DESK</h3>
				<p>Beta Version 01.20</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>" id="loginForm">
                    <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="email" placeholder="example@gmail.com" title="Please enter you username" required="" value="<?php echo e(old('email')); ?>" name="email" id="username" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" required autofocus>
                                <span class="help-block small">Your unique username to app</span>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                                <span class="help-block small">Yur strong password</span>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            
                            <button type="submit" class="btn btn-success btn-block loginbtn">
                                    <?php echo e(__('Login')); ?>

                            </button>

                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2019. All rights reserved</p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/bootstrap.min.js')); ?>"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/wow.min.js')); ?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/jquery-price-slider.js')); ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/jquery.meanmenu.js')); ?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/owl.carousel.min.js')); ?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/jquery.sticky.js')); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/jquery.scrollUp.min.js')); ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('itdesk/js/scrollbar/mCustomScrollbar-active.js')); ?>"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/metisMenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('itdesk/js/metisMenu/metisMenu-active.js')); ?>"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/tab.js')); ?>"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/icheck/icheck.min.js')); ?>"></script>
    <script src="<?php echo e(asset('itdesk/js/icheck/icheck-active.js')); ?>"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/plugins.js')); ?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo e(asset('itdesk/js/main.js')); ?>"></script>
</body>

</html>