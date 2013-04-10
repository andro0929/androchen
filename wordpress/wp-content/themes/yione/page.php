<?php
	/***
	 * Theme Name: YiOne
	 * Author : Yuxin
	 * Url : http://fundesigner.net
	***/

get_header();


while (have_posts()) : the_post();
?>
<article>
	<div id="content" class="span8">
		<h1 class="title"><?php the_title();?></h1>
		<?php the_content();?>
	</div>
</article>
<?php get_sidebar();?>
</div>
<?php endwhile;?>
<?php get_footer();?>