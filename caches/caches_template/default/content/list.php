<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>my_css/list_about.css" />
	<!-- banner -->
	<div id="banner_w">
		<div id="banner">
		</div>
	</div>
	<!-- box_kx -->
	<div class="box_kx"></div>
	<!-- body -->
	<div class="body_w">
		<div class="Box">
			<div class="body_left">
				<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7b0aab668867a4e2064db69204c730b3&action=lists&catid=%24catid&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'5',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li class="left">
						<a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $r['title'];?></a>
					</li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
			<div class="body_right">
				<div class="title">
        			<span>品牌介绍
        				<em>ABOUT</em>
        			</span>
            		<em>
            			<a href="<?php echo siteurl($siteid);?>">首页</a>
            			&gt; 品牌介绍
            		</em>
        		</div>
        		<div class="dt_show">
        			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=42914301fc3ff8f415966dfdb18c8c98&action=lists&catid=%24catid&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'1',));}?>
        			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        				<?php echo $r['content'];?>
						<img src="<?php echo $r['thumb'];?>" alt=""/>
					<p></p><br/>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        		</div>
			</div>
		</div>
	</div>
<?php include template("content","footer"); ?>