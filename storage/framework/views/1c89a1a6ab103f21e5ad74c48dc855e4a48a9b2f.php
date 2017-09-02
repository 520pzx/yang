<!DOCTYPE html>
<html>
<head>
<title><?php echo $__env->yieldContent('title','首页'); ?></title>
<base href="/frontend/">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Doctor Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<?php $__env->startSection('css'); ?>
<?php echo $__env->yieldSection(); ?>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-logo">
				<a href="<?php echo e(URL::route('index/index')); ?>"><img src="images/logo.png" alt="logo"/></a>		
			</div>
			<div class="header-info">
				<p>Information Service:</p>
				<h4>400-1234-1234</h4>
			</div>			
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//header-->
	<!--header-bottom-->
	<div style="float:fixed" class="header-bottom">
		<div class="container">
			<!--top-nav-->
			<div class="top-nav cl-effect-5">
				<span class="menu-icon"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="<?php echo e(URL::route('index/index')); ?>" class="<?php echo e(Request::getPathInfo()=='/index' || Request::getPathInfo()=='/' ? 'active':''); ?>"><span data-hover="主页">主页</span></a></li>
					<li><a href="<?php echo e(URL::route('index/about')); ?>" class="<?php echo e(Request::getPathInfo()=='/about' ? 'active':''); ?>"> <span data-hover="关于我们">关于我们</span></a></li>
					<?php $__env->startSection('service'); ?>
					<li><a href="<?php echo e(URL::route('index/services')); ?>" class="<?php echo e(Request::getPathInfo()=='/service' ? 'active':''); ?>"> <span data-hover="医疗服务">医疗服务</span></a></li>
					<?php echo $__env->yieldSection(); ?>
					<li><a href="<?php echo e(URL::route('index/news')); ?>" class="<?php echo e(Request::getPathInfo()=='/news' ? 'active':''); ?>"> <span data-hover="最新消息">最新消息</span></a></li>
					<li><a href="<?php echo e(URL::route('index/contact')); ?>" class="<?php echo e(Request::getPathInfo()=='/contact' ? 'active':''); ?>"> <span data-hover="联系我们">联系我们</span></a></li>
				</ul>
				<!-- script-for-menu -->
				<script>
				   $( "span.menu-icon" ).click(function() {
					 $( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
				<!-- /script-for-menu -->
			</div>
			<!--//top-nav-->
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
					<button type="submit" class="btn btn-default"></button>

				</div>	

				<?php if(\Auth::user()): ?>
					<?php if(\Auth::user()->status == 0): ?>
					<ul class="nav navbar-nav navbar-right">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                <?php echo e(\Auth::user()->name); ?> <span class="caret"></span>
	                        </a>

	                        <ul class="dropdown-menu" role="menu">
	                        	<li><a href="javascript:;">个人账号</a></li>
	                            <li><a href="<?php echo e(url('index/logout')); ?>">退出登录</a></li>
	                        </ul>
	                    </li>
	                </ul>
					<?php else: ?>
					<ul class="nav navbar-nav navbar-right">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                <?php echo e(\Auth::user()->name); ?> <span class="caret"></span>
	                        </a>
	                        <ul class="dropdown-menu" role="menu">
	                        	<li><a href="javascript:;">企业账号</a></li>
	                        	<li><a href="<?php echo e(url('index/perfect')); ?>">完善公司信息</a></li>
	                            <li><a href="<?php echo e(url('index/logout')); ?>">退出登录</a></li>
	                        </ul>
	                    </li>
                	</ul>
					<?php endif; ?>
				<?php else: ?>
				    <a href="<?php echo e(url('index/login')); ?>" class="btn btn-success">登录</a>	
					<a href="<?php echo e(url('index/register')); ?>" class="btn btn-info">注册</a>
				<?php endif; ?>
			</form>	
				
			
			<div class="clearfix"> </div>
				
		</div>
	</div>
	<!--//header-bottom-->
	
    <?php echo $__env->yieldContent('content'); ?>

	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">				
				<div class="col-md-4 recent-posts">
					<h4>Recent posts</h4>
					<div class="recent-posts-text">
						<h5>MARCH 30, 2015</h5>
						<p>Duis autem vel eum iriure dolor</p>
					</div>
					<div class="recent-posts-text">
						<h5>MARCH 15, 2015</h5>
						<p>Duis autem vel eum iriure dolor</p>
					</div>
					<div class="recent-posts-text">
						<h5>MARCH 3, 2015</h5>
						<p>Duis autem vel eum iriure dolor</p>
					</div>
				</div>
				<div class="col-md-4 recent-posts">
					<h4>Twiter feeds</h4>
					<div class="recent-posts-text">
						<h5>about 2 days ago<span>@kristit</span></h5>
						<p>Good work buddy</p>
					</div>
					<div class="recent-posts-text">
						<h5>about 2 days ago <span>@fasteven</span></h5>
						<p>Good work buddy</p>
					</div>
					<div class="recent-posts-text">
						<h5>about 2 days ago <span>@streamer</span> </h5>
						<p>Good work buddy</p>
					</div>
				</div>
				<div class="col-md-4 recent-posts">
					<h4>Our address</h4>
					<p class="adrs">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
						 facilisi Nam liber tempor cum soluta </p>
					<ul>
						<li><span></span>Moonshine St. 14/05 Light, Japan</li>
						<li><span class="ph-no"></span>+00 (123) 111 11 11</li>
						<li><span class="mail"></span><a href="mailto:example@mail.com">mail@example.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>	
	</div>	
	<!--//footer-->
	<div class="footer-bottom">
		<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"> </script>
    <?php $__env->startSection('js'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>
</html>