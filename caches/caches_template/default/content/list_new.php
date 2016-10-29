<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>my_css/new.css" />
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
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5baabe5df3fa27f744b089c23da45996&action=lists&catid=%24catid&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'1',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li class="left">
						<a href="<?php echo $CATEGORYS[$catid]['url'];?>">新闻动态</a>
					</li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
			<div class="body_right">
				<div class="title">
        			<span>新闻动态
        				<em>NEWS</em>
        			</span>
            		<em>
            			<a href="<?php echo siteurl($siteid);?>">首页</a>
            			&gt; 新闻动态
            		</em>
        		</div>
        		<div class="new_show">
        			<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=42914301fc3ff8f415966dfdb18c8c98&action=lists&catid=%24catid&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'1',));}?>
        			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        				<?php echo $r['content'];?>
        			<?php $n++;}unset($n); ?>
        			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
        			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=adc1c53bd294533dc83ebdf632e8841e&action=lists&catid=%24catid&num=9&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		     	 	<ul>
		     	 		<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
		     	 		<li class="new_list">
		     	 			<span class="new">
      							<a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
      						</span>
      						<span class="new_right">[2016-03-12]</span>
		     	 		</li>
		     	 	<?php $n++;}unset($n); ?>
					</ul>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        			<div class="page"></div>
        		</div>
			</div>
		</div>
	</div>
<?php include template("content","footer"); ?>
