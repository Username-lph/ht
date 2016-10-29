<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>my_css/index.css" />
	<!-- banner -->
	<div id="banner_w">
		<div id="banner">
			<div class="ban_top">
				<ul>
					<li class="ban img">
						<img src="<?php echo IMG_PATH;?>my_images/banner_01.jpg" alt=""/>
					</li>
					<li class="ban">
						<img src="<?php echo IMG_PATH;?>my_images/banner_02.jpg" alt=""/>
					</li>
					<li class="ban">
						<img src="<?php echo IMG_PATH;?>my_images/banner_03.jpg" alt=""/>
					</li>
				</ul>
			</div>
			<div class="ban_bottom">
				<ul>
					<li class="circle ban_circle"></li>
					<li class="circle"></li>
					<li class="circle"></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- box_kx -->
	<div class="box_kx"></div>
	<!-- body -->
	<div class="body_w">
		<div class="box">
			<ul>
				<li class="box1">
					<a href="#"></a>
				</li>
				<li class="box2">
					<a href="#"></a>
				</li>
				<li class="box3">
					<a href="#"></a>
				</li>
			</ul>
		</div>
	</div>
<script src="<?php echo JS_PATH;?>/my_js/function.js"></script>
<script src="<?php echo JS_PATH;?>/my_js/animate.js"></script>
<script src="<?php echo JS_PATH;?>/my_js/banner.js"></script>
<?php include template("content","footer"); ?>