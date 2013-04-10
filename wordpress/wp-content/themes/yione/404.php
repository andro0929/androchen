<?php
	/***
	 * Theme Name: YiOne
	 * Author : Yuxin
	 * Url : http://fundesigner.net
	***/
	
get_header();
?>
	<div id="content" class="span8">
		<h2 class="title">404  找不到</h1>
			<p>
				抱歉，找不到您所要的面頁，或許已經移除、暫時關閉或發生錯誤。
			</p>
			<p>
				您可經由<a href="<?php bloginfo('url');?>" title="回到首頁">回到首頁</a>或以下分類及時間找到您所要的內容，或利用邊欄的搜尋框。
			</p>
			<h3>依分類查詢</h3>
			<ul class="errorlist">
				<?php wp_list_categories('orderby=ID&show_count=1&use_desc_for_title=0&title_li=&style=list');?>
			</ul>
			<h3>依時間月份</h3>
			<ul class="errorlist">
				<?php wp_get_archives('type=monthly&show_post_count=1');?>
			</ul>
			<h3>隨選文章</h3>
			<table class="css_table">
				<tr class="list_first">
					<td class="list_title"> 主題 </td>
					<td class="list_comment"> 迴響 </td>
					<td class="list_time"> 時間 </td>
				</tr>
				<?php s_random_lists(10); ?>
			</table>
			
	</div>
	<?php get_sidebar();?>
</div>
<?php get_footer();?>