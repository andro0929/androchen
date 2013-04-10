<?php
/***
 * Theme Name: YiOne
 * Author : Yuxin
 * Url : http://fundesigner.net
 ***/
?>
</div>
</div>
</div>
<footer id="footer">
	<div id="footer_widget" class="container">
		<div class="row">
			<aside class="span4">
				<?php dynamic_sidebar('footer_one'); ?>
			</aside>
			<aside class="span4">
				<?php dynamic_sidebar('footer_two'); ?>
			</aside>
			<aside class="span4">
				<?php dynamic_sidebar('footer_three'); ?>
			</aside>
		</div>
	</div>
	<div id="footer_text">
		<div class="container">
			<div class="span12">
				<span class="copyright">
					<?php the_option('footer_text'); ?>
				</span>
				<!--請不要刪除，表示對作者的支持！ -->
				<span class="tips byauthor" title="佈景主題由 Yuxin 製作，網站為 fundesigner.net" rel="tooltip">
					Theme YiOne By <a href="http://fundesigner.net/" title="Yuxin @ 樂在設計">Yuxin @ 樂在設計</a>
				</span>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
<?php the_option('analytics'); ?>
</body> </html>