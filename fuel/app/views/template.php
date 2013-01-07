<?php 
    $sauth = Auth::instance();
    session_start();
    $_SESSION['user'] = $sauth->get_user_id();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
        <?php echo Asset::js('jquery-1.8.3.js'); ?>
	<?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('style.css'); ?>
        <?php echo Asset::css('head.css'); ?>
        <?php echo Asset::css('chat-style.css'); ?>
	<style>
		body { margin: 40px; }
	</style>
</head>
    <body>
	<div class="container">
			<div>
                            <header id="head">
                                <div id="gears">
                                        <img id="gear1" src="http://localhost/Demo/public/assets/css/gear1.png" alt="gear"/>
                                        <img id="gear2" src="http://localhost/Demo/public/assets/css/gear2.png" alt="gear"/>
                                        <img id="gear3" src="http://localhost/Demo/public/assets/css/gear3.png" alt="gear"/>
                                </div>
                                <a href=""><img id="logo" src="http://localhost/Demo/public/assets/css/logo.png" alt="logo"/></a>
                                
                            </header>
                                <aside id="auth">	    
                                    <?php
                                        $auth = Auth::instance();
                                        $user_id = $auth->get_user_id();
                                        if (Auth::has_access('chat.read')) :
                                    ?>
                                        <div id="logged-in">
                                            <?php echo "Logged in as " . $auth->get_screen_name(); ?>
                                        </div>
                                        <div id="logout">
                                            <?php echo Html::anchor("users/logout", "Log out"); ?>
                                        </div>
                                    <?php endif; ?>
                                </aside>
				<hr>
                        <?php if (Session::get_flash('success')): ?>
				<div class="alert-message success">
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
                        <?php endif; ?>
                        <?php if (Session::get_flash('error')): ?>
				<div class="alert-message error">
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
                        <?php endif; ?>
			</div>
                        <?php if (isset($col_3)): ?>
                            <div id="content">
                                <div class="content_1"><?php if(isset($content_left))echo $content_left; ?></div>
                                <div class="content_1"><?php if(isset($content_middle))echo $content_middle; ?></div>
                                <div class="content_2"><?php if(isset($content_right))echo $content_right; ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($col_2)): ?>
                            <div id="content">
                                <div id="login"><?php if(isset($login))echo $login; ?></div>
                                <div id="register"><?php if(isset($register))echo $register; ?></div>
                            </div>
                        <?php endif; ?>
            <footer>
            <p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
        </footer>
	</div>
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    </body>
</html>