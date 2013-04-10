<?php
	/***
	 * Theme Name: YiOne
	 * Author : Yuxin
	 * Url : http://fundesigner.net
	***/


get_header();
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
	<section id="content" class="span8">
			<?php breadcrumb_init($curauth->nickname); ?>
			<?php  if ( have_posts()) : ?>
			<?php  if ( is_author() ) { ?>
			<?php  if ( is_option('author') ){ ?>
			<h2 class="author_page"> 關於 <?php echo $curauth->nickname;?></h2>
			<div class="author_archive" style="height: 70px;">
				<div style="float:left; margin:0px 10px 10px 0px; ">
					<?php echo get_avatar($curauth->id,68);?>
				</div>
				<p>
					<?php if($curauth->user_description){
					 echo $curauth->user_description;　?>
					<?php } else { ?>
					<?php }?>
				</p>
			</div>
			<?php } }?>
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
			<?php $max_page = $wp_query->max_num_pages; 
		 if($max_page > 1){ ?>
		<div class="pagination">
			<?php pagenavi();?>
		</div>
		<?php } ?>
		</section>
		
		<?php wp_reset_query();?>
	<?php get_sidebar();?>
<?php get_footer();?>