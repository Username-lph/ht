<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>my_css/contact.css" />
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
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=df7e7025257d4030a28506c61ef31009&action=lists&catid=%24catid&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'1',));}?>
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
        			<span>联系我们
        				<em>CONTACT</em>
        			</span>
            		<em>
            			<a href="<?php echo siteurl($siteid);?>">首页</a>
            			&gt; 联系我们
            		</em>
        		</div>
        		<div class="dt_show">
        			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=42914301fc3ff8f415966dfdb18c8c98&action=lists&catid=%24catid&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'1',));}?>
        			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        				<?php echo $r['content'];?>
        				<iframe border="0" frameborder="0" framespacing="0" height="400" hspace="0" id="mapbarframe" marginheight="0" marginwidth="0" scrolling="no" src="http://searchbox.mapbar.com/publish/template/template1010/index.jsp?CID=lihuanli&amp;tid=tid1010&amp;showSearchDiv=1&amp;cityName=%E5%B9%BF%E5%B7%9E%E5%B8%82&amp;nid=MAPBQNHBXMCAZIYBXNHWX&amp;width=700&amp;height=400&amp;infopoi=2&amp;zoom=10&amp;control=1" vspace="0" width="700"></iframe>
        				<iframe border="0" frameborder="0" framespacing="0" height="400" hspace="0" id="mapbarframe" marginheight="0" marginwidth="0" scrolling="no" src="http://searchbox.mapbar.com/publish/template/template1010/index.jsp?CID=lihuanli&amp;tid=tid1010&amp;showSearchDiv=1&amp;cityName=%E5%A4%AA%E5%8E%9F%E5%B8%82&amp;nid=MAPBXNJBLMTPYVXRHBX&amp;width=700&amp;height=400&amp;infopoi=2&amp;zoom=10&amp;control=1" vspace="0" width="700"></iframe>
        			<?php $n++;}unset($n); ?>
        			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        		</div>
			</div>
		</div>
	</div>
<?php include template("content","footer"); ?>
