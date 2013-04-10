<?php
	/***
	 * Theme Name: YiOne
	 * Author : Yuxin
	 * Url : http://fundesigner.net
	***/
	$theme_module = get_bloginfo('template_directory')."/module/";
?>
<aside id="sidebar" class="span4">
	<?php if(is_single()){ ?>
	<section id="post_meta" class="right_sidebar">	
		<div class="meta">
				<div class="meta_time"><i class="icon-time icon-white"></i> <span title="<?php the_time('G:i'); ?>"><?php the_time('F ‧ j, Y'); ?></span></div>
				<div class="meta_category"><i class="icon-tag icon-white"></i> <?php the_category(' , '); ?></div>
				<div class="meta_comment"><i class="icon-comment icon-white"></i> <a href="#comments" title="查看迴響"><?php comments_number('0','1','%','',''); ?> 迴響</a></div>
		</div>
	</section>	
	<?php } ?>
	<section id="social_big" class="right_sidebar">
		<?php if( is_option('fb_page') ): ?>
		<a class="big_facebook" href="<?php the_option('fb_page'); ?>"><img src="<?php echo $theme_module ?>/images/big_facebook.png"></a>
		<?php endif; if( is_option('gp_page') ): ?>
		<a class="big_google" href="<?php the_option('gp_page'); ?>"><img src="<?php echo $theme_module ?>/images/big_google.png"></a>
		<?php endif; if( is_option('twi_page') ): ?>
		<a class="big_twitter" href="<?php the_option('twi_page'); ?>"><img src="<?php echo $theme_module ?>/images/big_twitter.png"></a>
		<?php endif; if( is_option('rssfeed_url') ): ?>
		<a class="big_rss" href="<?php the_option('rssfeed_url'); ?>"><img src="<?php echo $theme_module ?>/images/big_rss.png"></a>
		<?php else: ?>
		<a class="big_rss" href="<?php bloginfo('url') ?>/feed/"><img src="<?php echo $theme_module ?>/images/big_rss.png"></a>
		<?php endif; ?>
	</section>
	<?php dynamic_sidebar('sidebar'); ?>
</aside>
	