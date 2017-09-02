<?php $__env->startSection('title'); ?>
	关于我们
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
	<!--about-->
	<div class="about">
		<div class="container">
			<h3><?php
			if(!empty($about)){
				echo $about->function;
				// print_r($about);die;
			} else {
				echo "Who We Are?";
			}
			?></h3>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="images/img4.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-6 about-text-right">
					<h4><?php
					if(!empty($about)){
						echo $about->title;
					} else {
						echo "Who We Are?";
					}
					?></h4>
					<p><?php
					if(!empty($about)){
						echo $about->content;
					} else {
						echo "Who We Are?";
					}
					?></p>
					<ul>
						<li><a href="#">Donec ut quam andomised words lscelerisque.</a></li>
						<li><a href="#">Etiam volutpa andomised words tbh lobortis</a></li>
						<li><a href="#">Varius fusce vitaeb landitan domised words.</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="about-slid"> 
			<div class="container">
				<div class="about-slid-info"> 
					<h2>Lorem Ipsum is that it has a moreless normal</h2>
					<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet embarrassing hidden in the middle of text.</p>
				</div>
			</div>
		</div>
		<div class="about-team">
			<h3>Meet our team</h3>
			<div class="container">
				<div class="row team-row">
				<?php foreach($team as $v): ?>
					<div class="col-sm-6 col-md-3 team-grids">
						<div class="thumbnail team-thmnl">
							<img src="images/img6.jpg" alt="...">
							<div class="caption">
								<h4><a href="#"><?php echo e($v->name); ?></a></h4>
								<p><?php echo e($v->per_info); ?></p>						
							</div>
						</div>
					</div>
				<?php endforeach; ?>
					<!-- <div class="col-sm-6 col-md-3 team-grids">
						<div class="thumbnail team-thmnl">
							<img src="images/img5.jpg" alt="...">
							<div class="caption">
								<h4><a href="#">vaura tegsner</a></h4>
								<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 team-grids">
						<div class="thumbnail team-thmnl">
							<img src="images/img6.jpg" alt="...">
							<div class="caption">
								<h4><a href="#">Jark Kohnson</a></h4>
								<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 team-grids">
						<div class="thumbnail team-thmnl">
							<img src="images/img7.jpg" alt="...">
							<div class="caption">
								<h4><a href="#">goes mehak</a></h4>
								<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 team-grids">
						<div class="thumbnail team-thmnl">
							<img src="images/img8.jpg" alt="...">
							<div class="caption">
								<h4><a href="#">Jark Kohnson</a></h4>
								<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
							</div>
						</div>
					</div> -->
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="about-skills">
			<div class="container">
				<h3>Our speacials</h3>
				<div class="about-choose">
					<div class="col-md-4 about-choose-info">
						<h4>Certifications</h4>
						<ul>
							<li><a href="#">Donec ut quam ligula feugiat scelerisque.</a></li>
							<li><a href="#">Etiam volutpat tortor quis nibh lobortis</a></li>
							<li><a href="#">Fusce vitae dolor vitae blandit varius.</a></li>
							<li><a href="#">Proin commodo metus sed nisi lobortis.</a></li>
							<li><a href="#">Nunc volutpat neque vel augue interdum,</a></li>
							<li><a href="#">condimentum fringilla justo lobortis.</a></li>
							<li><a href="#">Vivamus consequat dolor ac est congue.</a></li>
						</ul>
					</div>
					<div class="col-md-4 about-choose-info">
						<h4>Our skills</h4>
						<ul>
							<li><a href="#">Donec ut quam ligula feugiat scelerisque.</a></li>
							<li><a href="#">Etiam volutpat tortor quis nibh lobortis</a></li>
							<li><a href="#">Fusce vitae dolor vitae blandit varius.</a></li>
							<li><a href="#">Proin commodo metus sed nisi lobortis.</a></li>
							<li><a href="#">Nunc volutpat neque vel augue interdum,</a></li>
							<li><a href="#">condimentum fringilla justo lobortis.</a></li>
							<li><a href="#">Vivamus consequat dolor ac est congue.</a></li>
						</ul>
					</div>
					<div class="col-md-4 about-choose-info">
						<h4>Our technologies</h4>
						<ul>
							<li><a href="#">Donec ut quam ligula feugiat scelerisque.</a></li>
							<li><a href="#">Etiam volutpat tortor quis nibh lobortis</a></li>
							<li><a href="#">Fusce vitae dolor vitae blandit varius.</a></li>
							<li><a href="#">Proin commodo metus sed nisi lobortis.</a></li>
							<li><a href="#">Nunc volutpat neque vel augue interdum,</a></li>
							<li><a href="#">condimentum fringilla justo lobortis.</a></li>
							<li><a href="#">Vivamus consequat dolor ac est congue.</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>	
		</div>
	</div>	
	<!--//about-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend_layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>