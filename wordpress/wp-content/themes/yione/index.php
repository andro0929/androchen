<?php
/***
 * Theme Name: YiOne
 * Author : Yuxin
 * Url : http://fundesigner.net
 ***/

get_header();
?>
<section id="content" class="span8">
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post_id_<?php the_ID(); ?>" class="post_list row-fluid">
		<div class="thumb_container"><?php get_thumb_images('thumb_img'); ?>
		<div class="meta">
				<div class="meta_time"><i class="icon-time icon-white"></i> <span title="<?php the_time('G:i'); ?>"><?php the_time('F ‧ j, Y'); ?></span></div>
				<div class="meta_category"><i class="icon-tag icon-white"></i> <?php the_category(' , '); ?></div>
				<div class="meta_comment"><i class="icon-comment icon-white"></i> <a href="<?php the_permalink(); ?>#comments" title="查看迴響"><?php comments_number('0','1','%','',''); ?> 迴響</a></div>
		</div>			
		</div>
		<div class="post_container">
		<h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>		

			<div class="main_content">
				<?php the_content(); ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</article>
	<?php endwhile; wp_reset_query(); ?>
	<div class="pagination">
		<?php pagenavi(); ?>
	</div>
</section>
<?php get_sidebar(); ?>

</div>

<!-- Google analytics JavaScript -->
  <script type="text/javascript">
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-36082223-1']);
   _gaq.push(['_trackPageview']);

   (function() {
     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();
 </script>
<?php get_footer(); ?>