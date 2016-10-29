<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>广州欢腾鞋业-首页</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>my_css/head.css"/>
</head>
<body>
	<!-- 页头top -->
	<div id="head_w">
		<div id="head" class="head_box">
			<span class="head_span">
				<em>·</em>
				欢迎进入本站！
			</span>
			<ul>
				<li>
					<a href="javascript:;">设为首页</a>
				</li>
				<li>
					<a href="javascript:;">加入收藏</a>
				</li>
				<li>
					<a href="javascript:;">联系我们</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- nav导航 -->
	<div id="nav_w">
		<div id="nav">
			<div class="logo">
				<img src="<?php echo IMG_PATH;?>my_images/logo.png" alt=""/>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8a1a8f826745ad5a87688fe9a0103c04&action=category&catid=0&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'7',));}?>
			<ul class="nav">
				<?php $a=0?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php $a++; ?>
				<li class="nav1 nav_list <?php if($a==count($data)) { ?>last<?php } ?>">
					<a href="<?php if($a==1) { ?><?php echo siteurl($siteid);?><?php } else { ?><?php echo $r['url'];?><?php } ?>">
						<img src="<?php echo IMG_PATH;?>my_images/<?php echo $a;?><?php echo $a;?>.png" alt=""/>
					</a>
					<a href="<?php if($a==1) { ?><?php echo siteurl($siteid);?><?php } else { ?><?php echo $r['url'];?><?php } ?>">
						<img src="<?php echo $r['image'];?>" alt="" class="img"/>
					</a>
				</li>
				<!--<li class="nav<?php echo $r['catid'];?>">
					<a href="<?php echo $r['url'];?>"></a>
				</li>-->
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>