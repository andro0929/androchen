<?php
/***
 * Theme Name: YiOne
 * Author : Yuxin
 * Url : http://fundesigner.net
 ***/

get_header();

social_button();


?>
<section id="content" class="span8">
	<?php
		while ( have_posts() ) : the_post();
	?>
	<article id="post-id-<?php the_ID();?>" class="post-single">
		<header>
			<?php breadcrumb_init(); ?>
			<h1 class="title"><?php the_title();?></h1>		
		</header>
		<div class="main_content single_content">
			<?php the_content();?>
			<div class="link_pages"><?php wp_link_pages(array('before' => '<strong>文章未完，請翻下一頁： </strong> ', 'after' => '', 'next_or_number' => 'number')); ?></div>
		</div>
		<footer>
			<?php if ( function_exists('get_related_posts_slider')) { get_related_posts_slider(); } ?>
			<div class="clearfix"></div>
			<?php postauthor_init(); ?>
			<ul>
				<li>
					分類 : <?php the_category(',');?>
				</li>
				<li>
					標籤 : <?php the_tags('', ',', '');?>
				</li>
			</ul>
		</footer>
	</article>
	<div id="comments">
		<?php comments_template();?>
	</div>
	<?php endwhile;?>
	<?php wp_reset_query();?>
</section>
<?php get_sidebar();?>
</div>
<?php get_footer();?>