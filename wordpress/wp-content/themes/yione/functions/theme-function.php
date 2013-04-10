<?php


function social_button(){
	global $post;
?>		
	<div id="share_button" class="hidden-phone">		
		<div id="fb_button" style="padding: 5px 0 5px 14px;">
			<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="box_count" data-width="45" data-show-faces="false" data-font="trebuchet ms"></div>
		</div>		
		<div id="gplus_button" style="padding: 5px 0 5px 8px;">
			<g:plusone size="tall"></g:plusone>
		</div>		
	</div>
<?php		
}

function add_user_porfile( $contactmethods ) {
	$contactmethods['google'] = 'Google+ 個人網址';
	$contactmethods['facebook'] = 'Facebook 個人網址';
	$contactmethods['twitter'] = 'Twitter 個人網址';
	$contactmethods['description_url'] = '個人介紹面頁';
	return $contactmethods;
}
add_filter('user_contactmethods','add_user_porfile',10,1);

function postauthor_init(){
	global $post;
?>
<div class="author">
	<div class="avatar"><?php echo get_avatar(get_the_author_meta('ID'), 100);?></div>
	<div class="text">
		<span class="name">作者：<?php the_author_meta('display_name');?></span>
		<span class="description">
				<?php the_author_meta('description');?>
		</span>
		<div class="social">
			<?php if ( get_the_author_meta( 'google' ) ): ?>
				<a href="<?php the_author_meta('google');?>?rel=author" title="我的G+">Google+</a> | <?php endif;?>
			<?php if ( get_the_author_meta( 'facebook' ) ): ?>
				<a href="<?php the_author_meta('facebook');?>" title="我的臉書">Facebook</a> | <?php endif;?>
			<?php if ( get_the_author_meta( 'twitter' ) ): ?>
				<a href="<?php the_author_meta('twitter');?>" title="我的推特">Twitter</a> | <?php endif;?>
			<?php if ( get_the_author_meta( 'description_url' ) ): ?>
				<a href="<?php the_author_meta('description_url');?>" title="<?php the_author_meta('display_name');?> 個人介紹">個人介紹</a> | <?php endif;?>
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="更多<?php the_author_meta('display_name');?>的文章">更多文章 &gt; </a></span>
		</div>
	</div>
</div>
<?php
}

function breadcrumb_init($nickname = ''){
	global $post,$theme_dir;
?>

<ul class="breadcrumb">
	
<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	<i class="icon-home"></i>	
	<a href="<?php bloginfo('url');?>" itemprop="url" title="<?php bloginfo('name');?>">
		<span itemprop="title"><?php bloginfo('name');?></span></a> <span class="divider">›</span>
</li>

<?php
if( is_single() ):
foreach ((get_the_category()) as $category) {
	echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
	echo '<a href="' . get_category_link($category -> term_id) . '" itemprop="url" title=' . $category -> cat_name . '> <span itemprop="title">' . $category -> cat_name . '</span></a> <span class="divider">›</span>';
	echo '</li>';
}
else:
?>
<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active">
		<span itemprop="title">
			<?php
	if (is_category()) {
		echo single_cat_title();
	} elseif (is_author()) {
		echo $nickname;
	} elseif (is_tag()) {
		echo single_tag_title('', true);
	} elseif (is_day()) {
		the_time(get_option('date_format'));
	} elseif (is_month()) {
		the_time('F, Y');
	} elseif (is_year()) {
		the_time('Y');
	}
?></span>
</li>
<?php
endif;
if( is_single() ):
?>
<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active" title="<?php the_title();?>">
    <span itemprop="title"><?php the_title();?></span>
</li>
<?php
endif;
?>
</ul>
<?php

}


function colorCloud($text) {
	$text = preg_replace_callback('|<a (.+?)>|i', 'colorCloudCallback', $text);
	return $text;
}


function colorCloudCallback($matches) {
	$text = $matches[1];
	$color = dechex(rand(0,16777215));
	$pattern = '/style=(\'|\")(.*)(\'|\")/i';
	$text = preg_replace($pattern, "style=\"color:#{$color};$2\"", $text);
	return "<a $text>";
}
add_filter('wp_tag_cloud', 'colorCloud', 1);



function insert_fb_in_head() {
	global $post;
	if ( is_home()) {
		echo '<meta property="og:image" content="'.f_option('logo').'" />' ;
		echo "\n";
		echo '<meta property="fb:admins" content="'. f_option('fb_admins') .'" />';
		echo "\n";
        echo '<meta property="fb:app_id" content="'. f_option('fb_appid') .'" />';
		echo "\n";
        echo '<meta property="og:title" content="' . get_bloginfo('name') . '"/>';
		echo "\n";
        echo '<meta property="og:description" content="' . get_bloginfo('description'). '"/>';
		echo "\n";
        echo '<meta property="og:url" content="' . get_bloginfo('url'). '"/>';
		echo "\n";	
        echo '<meta property="og:site_name" content="'. get_bloginfo('name'). '"/>';
		echo "\n";
	}
	if ( !is_singular()) return;
	$img = get_feature_image();
	$post_excerpt =  ( $post->post_excerpt ) ? $post->post_excerpt : trim( str_replace( "\r\n", ' ', strip_tags( $post->post_content ) ) );
	$description = mb_substr( $post_excerpt, 0, 160, 'UTF-8' );
	$description .= ( mb_strlen( $post_excerpt, 'UTF-8' ) > 160 ) ? '…' : '';
        echo "\n";		
		echo '<meta property="fb:admins" content="'. f_option('fb_admins') .'" />';//管理員ID
		echo "\n";
        echo '<meta property="fb:app_id" content="'. f_option('fb_appid') .'" />';//APP_ID
		echo "\n";
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';//標題
		echo "\n";
        echo '<meta property="og:description" content="' . $description . '"/>';//截取字數	
		echo "\n";		 
        echo '<meta property="og:type" content="article"/>';//內容格式
		echo "\n";
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';//連結
		echo "\n";	
        echo '<meta property="og:site_name" content="'.get_bloginfo('name'). '"/>';//網站名稱	
		echo "\n";
		echo '<meta property="og:image" content="'.$img.'" />' ;//圖片
		echo "\n";
		echo '<link rel="image_src" type="image/jpeg" href="'.$img.'" />' ;//圖片
		echo "\n";	
		echo '<meta property="og:type" content="website">';
		echo "\n";
		echo '<meta property="og:locale" content="zh_tw">';
		echo "\n";
}


add_action( 'wp_head', 'insert_fb_in_head', 10 );


add_filter('the_content', 'adsense_adder_at_more_tag');
function adsense_adder_at_more_tag($text) {
if( is_single() && is_option('gad1') && is_option('gad2')){
$ads_text = '
<div class="gads">
	<div class="gads_row">
		<div class="gads_cell">'.f_option('gad1').'</div>
		<div class="gads_cell">'.f_option('gad2').'</div>
	</div>
</div>
';
}else if( is_single() && is_option('gad1') && is_option('gad2')==''){
$ads_text = '
<div class="gads">
	<div class="gads_row" style="display: block;">
		<div class="gads_cell_center">'.f_option('gad1').'</div>
	</div>
</div>
';
}else if( is_single() && is_option('gad1')=='' && is_option('gad2')){
$ads_text = '
<div class="gads">
	<div class="gads_row" style="display: block;">
		<div class="gads_cell_center">'.f_option('gad2').'</div>
	</div>
</div>
';
}
$pos1 = strpos($text, '<span id="more-');
$pos2 = strpos($text, '</span>', $pos1);
$text1 = substr($text, 0, $pos2);
$text2 = substr($text, $pos2);
$text = $text1 . $ads_text . $text2;	
return $text;
}




register_nav_menus(
		array(
			'primary-menu' => __( '主選單' )
		)
);



if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'name' => '邊欄',
		'id' => 'sidebar',
		'description' => '顯示於其他面邊欄處.',
		'before_widget' => '<section id="%1$s" class="right_sidebar">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => '網頁底部 ( 1 )',
		'id' => 'footer_one',
		'description' => '顯示於其他面邊欄處.',
		'before_widget' => '<section id="%1$s" class="bottom_sidebar">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>'
	)); 
	register_sidebar(array(
		'name' => '網頁底部 ( 2 )',
		'id' => 'footer_two',
		'description' => '顯示於其他面邊欄處.',
		'before_widget' => '<section id="%1$s" class="bottom_sidebar">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>'
	)); 
	register_sidebar(array(
		'name' => '網頁底部 ( 3 )',
		'id' => 'footer_three',
		'description' => '顯示於其他面邊欄處.',
		'before_widget' => '<section id="%1$s" class="bottom_sidebar">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>'
	));
}



function the_option($name){
	global $shortname;
	$array = get_option($shortname.$name);
	if($array){
		echo stripslashes($array);
		return 0;	
	}else{
		return 0;
	}
}

function f_option($name){
	global $shortname;
	$array = get_option($shortname.$name);
	if($array){
		return stripslashes($array);	
	}else{
		return 0;
	}
}

function is_option($name){
	global $shortname;
	$array = get_option($shortname.$name);
	if($array){
		return ture;	
	}else{
		return false;
	}
}



if ( function_exists( 'add_theme_support'  ) ) {
    add_theme_support( 'post-thumbnails' );
}


function pagenavi($range = 5){
  global $paged, $wp_query;
  if ( !$max_page ) {
    $max_page = $wp_query->max_num_pages;
  }
  if($max_page > 1){
    if(!$paged){
      $paged = 1;
    }
echo '<ul><li class="paviinfo disabled"><a>第'.$paged.'頁、共'.$max_page.'頁</a></li>';
    if($paged != 1){
      echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='首頁'>首頁</a>";
    }
    previous_posts_link(' « ');
    if($max_page > $range){
      if($paged < $range){
   
        for($i = 1; $i <= ($range + 1); $i++){
          if ($i==$paged){  $dis = "disabled"; }else{ $dis = "";}
          echo "<li class='spagenum ".$dis."'><a title=".'"第'.$i.'頁"'. " href='" . get_pagenum_link($i) ."'";
          echo ">$i</a></li>";
        }
      }
	  
      elseif($paged >= ($max_page - ceil(($range/2)))){
        for($i = $max_page - $range; $i <= $max_page; $i++){
          if ($i==$paged){  $dis = "disabled"; }else{ $dis = "";}
          echo "<li class='spagenum ".$dis."'><a title=".'"第'.$i.'頁"'. " href='" . get_pagenum_link($i) ."'";
          echo ">$i</a></li>";
        }
      }
	  
      elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
      	if ($i==$paged){  $dis = "disabled"; }else{ $dis = "";}
        for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
          echo "<li class='spagenum ".$dis."'><a title=".'"第'.$i.'頁"'. " href='" . get_pagenum_link($i) ."'";
          echo ">$i</a></li>";
        }
      }
    }
    else{
      for($i = 1; $i <= $max_page; $i++){
      	if ($i==$paged){  $dis = "disabled"; }else{ $dis = "";}
        echo "<li class='spagenum ".$dis."'><a title=".'"第'.$i.'頁"'. " href='" . get_pagenum_link($i) ."'";
        echo ">$i</a></li>";
      }
    }
    next_posts_link(' » ');
    if($paged != $max_page){
      echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='最後一頁'>最後一頁</a></ul>";
    }
  }
}

add_action('init', 'wp_jquery_cdn_init');
function wp_jquery_cdn_init() {
	global $theme_uri,$theme_module;
    if( !is_admin() ) {
        wp_deregister_script('jquery');
		
        wp_register_script('jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js', false, '1.8.1');
		wp_register_script('waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/1.1.6/waypoints.min.js', false,'1.1.6');
						
		wp_register_script('less','http://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.0/less-1.3.0.min.js', false,'1.3.0');
		wp_register_script('bootstrap_javascript', 'http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.1.1/bootstrap.min.js', false,'2.1.1');
		wp_register_script('base', $theme_module.'javascript/base.js', false);
		
		wp_register_style('less', $theme_module . 'less/main.less', false);
		//wp_register_style('less2', $theme_module . 'less/schame.php', false);
		wp_register_style('bootstrap', 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css', false,'2.1.1');
    }
}
add_action('init', 'need_use_jquery');
function need_use_jquery() {
    if( !is_admin() ) {
    	add_filter('style_loader_tag', 'lesscss_replace');
		add_filter('style_loader_tag', 'lesscss2_replace');
        wp_enqueue_script('jquery');
		wp_enqueue_script('waypoints');
		
		wp_enqueue_script('bootstrap_javascript');
		wp_enqueue_script('base');
		
		
		wp_enqueue_style('less');
		//wp_enqueue_style('less2');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('bootstrap_responsive');
		
		wp_enqueue_script('less');
    }
}
function lesscss_replace($tag){
	return preg_replace("/='stylesheet' id='less-css'/", "='stylesheet/less' id='less-css'", $tag);
}
function lesscss2_replace($tag){
	return preg_replace("/='stylesheet' id='less2-css'/", "='stylesheet/less' id='less-css'", $tag);
}

function get_thumb_images($css_class){
	if( is_option('thumb_open') ){	
	global $post;
	if($img1 = get_feature_image()):
?>

<div class="thumb" title="瞧瞧文章！">
		<a href="<?php the_permalink();?>">
			<img title="<?php the_title();?>" class="<?php echo ($css_class!='') ? $css_class : "thumb_img"; ?>" src="<?php echo $img1; ?>">
		</a>
	<div class="shadow">
	<div class="ffb_button" style="padding: 5px 0 5px 5px;float:left;width:88px;opacity:1;">
		<div class="fb-like" data-href="<?php the_permalink();?>" data-send="false" data-layout="button_count" data-width="45" data-show-faces="false" data-font="trebuchet ms"></div>
	</div>		
	<div class="gplus_button" style="padding: 5px 0 5px 5px;float:left;width:88px;opacity:1;">
		<div class="g-plusone" data-size="medium" data-href="<?php the_permalink();?>"></div>
	</div>
	</div>		
</div>
<?php
	endif;
	}
}

function get_feature_image(){
	global $post;
	if (has_post_thumbnail()){
		$img1 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	} else {
		$content = $post->post_content;
		$href = stripos($content,"<img");
		if($href!==false){
			
			$content=substr($content,$href,stripos($content,">",$href));
			$href = stripos($content,"src=")+4;
			$stopchar=" ";
							
			if("".substr($content,$href,1)=='"'){
				$stopchar = '"';
				$href++;
			}
			if("".substr($content,$href,1)=="'"){
				$stopchar = "'";
				$href++;
			}
			$img1 = "";

			do{
				$char = substr($content,$href++,1);
				if($char != $stopchar)
					$img1 .= $char;
			}while(
			
			($char != $stopchar) && ($href < strlen($content))
			
			);	
		}
	}
	
	return $img1;
}

function mytheme_comment($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;

?>
<li id="comment-id-<?php comment_ID() ?>" class="comment_list_box">
<div id="comment-<?php comment_ID();?>">
<div class="comment-author vcard">
<?php echo get_avatar($comment, $size = '36', $default = '<path_to_url>');?>
<?php printf(__('<span class="fn">%s</span>'), get_comment_author_link()) ?>
</div>

<div class="comment-meta commentmetadata"><?php printf(__('%1$s @ %2$s'), get_comment_date(),  get_comment_time()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
<?php if ($comment->comment_approved == '0') : ?>
<em class="comment_approved"><?php _e('Your comment is awaiting moderation.') ?></em>
<?php endif;?>
<?php comment_text() ?>
<div class="comment_reply">
<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
</div>

<?php }

function prohibit_self_pingback( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, $home ) ) unset($links[$l]);
}
add_action( 'pre_ping', 'prohibit_self_pingback' );

function headbox_init(){

?>
<div class="sc hidden-phone">
<?php if( is_option('fb_page') ) { ?>
<div class="sc_facebook">
	<div>
		<div class="fb-like-box" data-href="<?php the_option('fb_page'); ?>" data-width="280" data-height="300" data-show-faces="true" data-border-color="#FFF" data-stream="false" data-header="false"></div>
	</div>
</div>
<?php } if( is_option('gp_page') ) { ?>
<div class="sc_google">
	<div>
		<div class="g-plus" data-href="<?php the_option('gp_page'); ?>" data-rel="publisher" data-width="280"></div>
	</div>
</div>
<?php
} if(is_single()){
?>
<div class="sc_comments" id="sc_comments" title="移到迴響區域">
</div>
<?php } ?>
<div class="sc_gotop" id="gotop" title="回到網頁頂部">
</div>
</div>

<!--[if lte IE 7]>
<div class="header_space">
<p class="ie7lte">您目前使用的是 IE7 以下的舊版瀏覽器，網頁部分內容可能會不正常顯示。推薦您使用 <a href="http://www.google.com/chrome" title="Google Chrome">Google Chrome 新型瀏覽器</a>。</p>
</div>
<![endif]-->

<?php if( is_option('head_box_open')){ ?>
	
<div class="span12">
<div class="adbox row">
	<section>
	<div class="span4">
		<div class="green">
		<img src="<?php the_option('headbox_one_img');?>" width="50" height="50">
		<?php the_option('headbox_one_txt1');?><br />
		<?php the_option('headbox_one_txt2');?>
		</div>
	</div>
	<div class="span4">
		<div class="lightblue">
		<img src="<?php the_option('headbox_two_img');?>" width="50" height="50">
		<?php the_option('headbox_two_txt1');?><br />
		<?php the_option('headbox_two_txt2');?>
		</div>
	</div>	
	<div class="span4 last">
		<div class="orange">
		<img src="<?php the_option('headbox_three_img');?>" width="50" height="50">
		<?php the_option('headbox_three_txt1');?><br />
		<?php the_option('headbox_three_txt2');?>
		</div>
	</div>
	</section>
</div>
</div>
<?php
	}
}

function s_random_lists($num_limit = 5){
    query_posts('showposts='.$num_limit.'&orderby=rand');
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<tr>
	<td class="list_title"><h3><a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark"><?php the_title();?></a></h3></td>
	<td class="list_comment"><span title="迴響"><?php comments_number('0', '1', '%', '', '');?></span></td>
	<td class="list_time"><?php the_time('Y/m/d');?><td>
</tr>

<?php                				
    endwhile; else:
	endif;
    }
?>