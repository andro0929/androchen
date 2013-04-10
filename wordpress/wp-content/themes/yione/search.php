<?php
	/***
	 * Theme Name: YiOne
	 * Author : Yuxin
	 * Url : http://fundesigner.net
	***/

	
get_header();
?>
	<section id="content" class="span8">
		<h2 class="title">搜尋結果</h2>
			<?php if (have_posts()) : $count = 0; ?>
			<table class="css_table">
				<tr class="list_first">
					<td class="list_title"> 主題 </td>
					<td class="list_comment"> 迴響 </td>
					<td class="list_time"> 時間 </td>
				</tr>
				<?php while (have_posts()) : the_post(); ?>
				<tr>
					<td class="list_title"><h3><a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark"><?php the_title();?></a></h3></td>
					<td class="list_comment"><span title="迴響"><?php comments_number('0', '1', '%', '', '');?></span></td>
					<td class="list_time"><?php the_time('Y/m/d');?></td>
				</tr>
				<?php endwhile;?>
			</table>
			<?php else: ?>
			<p>抱歉，找不到符合條件的文章。</p>
			<?php endif;?>	
			<div class="pagination">
				<?php pagenavi();?>
			</div>

			
			<?php wp_reset_query();?>
		</section>
	<?php get_sidebar();?>
<?php get_footer();?>