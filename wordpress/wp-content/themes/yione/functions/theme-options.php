<?php
global $shortname,$options;
$themename = "YiOne";
$shortname = "yi_";
?>
<?php
$options = 
array (
	array( "type" => "section",
	       "desc" => '<div class="op_section">',
	       "name" => "圖標"
		 ),	
	array( "name" => "網站 Favicon 圖標",
		   "id" => $shortname."favicon",
		   "type" => "upload",
		   "std" => "",
		   "desc" => '顯示於網址列前面顯示的小圖示。'	
         ),
	array( "name" => "Logo 圖片",
		   "id" => $shortname."logo",
		   "type" => "upload",
		   "std" => "",
		   "desc" => "請輸入 LOGO 網址 或 點擊上傳圖片加入。（若使用背景圖片，Logo 盡量讓背景透明。）"
		 ),		 	
	array( "type" => "close"),	
	array( "type" => "section",
	       "desc" => '</div><div class="op_section hide">',
	       "name" => "自訂"
		 ),			 		  		 
	array( "name" => "自定義 CSS 樣式程式碼",
		   "id" => $shortname."custom_css",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "可輸入 CSS 樣式程式碼，會覆蓋預設佈景之 CSS。"
		 ),			 			  
	array( "name" => "統計分析程式碼 （載入於<／body>前面）",
		   "id" => $shortname."analytics",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "可放入相關統計或需要放置在載入於<／body>前面 的分析代碼。"
		 ),
	array( "name" => "統計分析程式碼 （載入於<／head>前面）",
		   "id" => $shortname."headcode",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "可放入相關統計或需要放置在載入於<／head>前面 的分析代碼。"
		 ),
	array( "name" => "網站底部資訊",
		   "id" => $shortname."footer_text",
		   "type" => "textarea",
		   "std" => "Copyright © 2012 ",
		   "desc" => "顯示於網頁最底部之區塊，可使用 HTML 程式碼。"
		 ),
	array( "type" => "close"),			 	 		 		 	 
	array( "type" => "section",
	       "desc" => '</div><div class="op_section hide">',
	       "name" => "社群"
		 ),	
	array( "name" => "Facebook Admins ID （管理員的ID）",
		   "id" => $shortname."fb_admins",
		   "type" => "text",
		   "std" => "",
		   "desc" => "Facebook Admins ID （管理員的ID），多個管理員請用逗號「,」分隔。"
		 ),	
	array( "name" => "Facebook APP ID （應用程式 ID）",
		   "id" => $shortname."fb_appid",
		   "type" => "text",
		   "std" => "",
		   "desc" => "Facebook APP ID （應用程式ID）。"
		 ),	
	array( "name" => "Facebook 粉絲專頁網址",
		   "id" => $shortname."fb_page",
		   "type" => "text",
		   "std" => "",
		   "desc" => "Facebook 粉絲專頁網址（網址請完整），沒有請留空"
		 ),
	array( "name" => "Google+ 頁面網址",
		   "id" => $shortname."gp_page",
		   "type" => "text",
		   "std" => "",
		   "desc" => "Google+ 頁面網址（網址請完整），沒有請留空"
		 ),
	array( "name" => "Twitter 追蹤頁網址",
		   "id" => $shortname."twi_page",
		   "type" => "text",
		   "std" => "",
		   "desc" => "Twitter 追蹤頁網址（網址請完整），沒有請留空"
		 ),			 	
	array( "name" => "RSS Feed 網址",
		   "id" => $shortname."rssfeed_url",
		   "type" => "text",
		   "std" => "". get_bloginfo('url') ."/feed/",
		   "desc" => "RSS Feed 網址，可填入如Feedbunber的RSS。（預設為". get_bloginfo('url') ."/feed/）"
		 ),		 		 		 		 	 
	array( "type" => "close"),	
	array( "type" => "section",
	       "desc" => '</div><div class="op_section hide">',
	       "name" => "雜項"
		 ),	
	array( "name" => "啟用作者資訊",
		   "id" => $shortname."author",
		   "type" => "checkbox",
		   "std" => "",
		   "desc" => "啟用後會在「文章下方」及「作者文章列表上方」 顯示作者資訊，內容來自帳號個人資訊，請至帳號 -> 個人資訊填寫。"
		 ),		 		  	 	 		 		 		 	 
	array( "type" => "close"),			 	 		 		 	 
	array( "type" => "section",
	       "desc" => '</div><div class="op_section hide">',
	       "name" => "廣告"
		 ),	 		  
	array( "name" => "（文章頁面之MORE區塊，300*250）廣告靠左",
		   "id" => $shortname."gad1",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "可放入廣告代碼，寬高為300*250。顯示於文章<!--more-->位置處"
		 ),			  
	array( "name" => "（文章頁面之MORE區塊，300*250）廣告靠右",
		   "id" => $shortname."gad2",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "可放入廣告代碼，寬高為300*250。顯示於文章<!--more-->位置處"
		 ), 
	array( "name" => "網站頂部 LOGO 旁橫幅",
		   "id" => $shortname."header_ad",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "可放入廣告代碼，最大長為 728 px。"
		 ),			 	
	array( "type" => "line",
		   "desc" => "註：若只填其中一個，則會將廣告置中。"
		 ),
	array( "name" => "啟用頁面頂部小框",
		   "id" => $shortname."head_box_open",
		   "type" => "checkbox",
		   "std" => "",
		   "desc" => "啟用頁面頂部小框，要啟用請打勾。"
		 ),	
	array( "name" => "第１格－圖示",
		   "id" => $shortname."headbox_one_img",
		   "type" => "upload",
		   "std" => "",
		   "desc" => '從左數過來的第一格，顯示在文字左邊。'	
         ),			 
	array( "name" => "第１格－第１行內容",
		   "id" => $shortname."headbox_one_txt1",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "從左數過來的第一格內第一行文字，可填入HTML代碼。"
		 ),			 		 
	array( "name" => "第１格－第２行內容",
		   "id" => $shortname."headbox_one_txt2",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "從左數過來的第一格內第二行文字，可填入HTML代碼。"
		 ),	
	array( "name" => "第２格－圖示",
		   "id" => $shortname."headbox_two_img",
		   "type" => "upload",
		   "std" => "",
		   "desc" => '從左數過來的第二格，顯示在文字左邊。'	
         ),			 
	array( "name" => "第２格－第１行內容",
		   "id" => $shortname."headbox_two_txt1",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "從左數過來的第二格內第一行文字，可填入HTML代碼。"
		 ),	
	array( "name" => "第２格－第２行內容",
		   "id" => $shortname."headbox_two_txt2",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "從左數過來的第二格內第二行文字，可填入HTML代碼。"
		 ),
	array( "name" => "第３格－圖示",
		   "id" => $shortname."headbox_three_img",
		   "type" => "upload",
		   "std" => "",
		   "desc" => '從左數過來的第三格，顯示在文字左邊。'	
         ),			 
	array( "name" => "第３格－第１行內容",
		   "id" => $shortname."headbox_three_txt1",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "從左數過來的第三格內第一行文字，可填入HTML代碼。"
		 ),	
	array( "name" => "第３格－第２行內容",
		   "id" => $shortname."headbox_three_txt2",
		   "type" => "textarea",
		   "std" => "",
		   "desc" => "從左數過來的第三格內第二行文字，可填入HTML代碼。"
		 ),			 			 	 		 		 		 	 
	array( "type" => "close"),		 			 	 		 		 	 
	array( "type" => "section",
	       "desc" => '</div><div class="op_section hide">',
	       "name" => "縮圖"
		 ),	
	array( "name" => "啟用文章縮圖",
		   "id" => $shortname."thumb_open",
		   "type" => "checkbox",
		   "std" => "1",
		   "desc" => "啟用文章縮圖，要啟用請打勾。"
		 ),
	array( "type" => "close"),		 			 	 		 		 	 
	array( "type" => "section",
	       "desc" => '</div><div class="op_section hide">',
	       "name" => "樣式"
		 ),
	array( "name" => "網站色系",
		   "id" => $shortname."color",
		   "type" => "text",
		   "std" => "#5EA8DE",
		   "color" => true,
		   "desc" => "可選擇上方建議顏色，或者自行挑選顏色"
		 ),		 
	array( "name" => "網站文字顏色",
		   "id" => $shortname."txtcolor",
		   "type" => "text",
		   "std" => "#0088cc",
		   "color" => true,
		   "desc" => "可選擇上方建議顏色，或者自行挑選顏色"
		 ),			 		 	 		 		 		 	 
	array( "type" => "section",
	       "desc" => '</div>',
		 )		 
		 
	);
?><?php
global $options, $value, $shortname;
function mytheme_add_admin() {
global $themename, $shortname, $options;
	$filename = basename(__FILE__);
	if ( $_GET['page'] == basename(__FILE__) ) {
		if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
			update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
			foreach ($options as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ){
					update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
				} else {
					delete_option( $value['id'] ); 
				} 
			}
			header("Location: admin.php?page=$filename&saved=true");
			die;
		} else if ( 'reset' == $_REQUEST['action'] ) {
 			foreach ($options as $value) {
			delete_option( $value['id'] ); }
			header("Location: admin.php?page=$filename&reset=true");
			die;
		}
	}	
	add_menu_page($themename.' 佈景設定選項', $themename, 'administrator', basename(__FILE__), 'mytheme_admin','',61);
}
function my_admin_scripts() {
global $themename, $shortname, $options;	
	$theme_dir = get_bloginfo('template_directory');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', $theme_dir .'/functions/js/custom_uploader.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}
function my_admin_styles() {
global $themename, $shortname, $options;	
	$theme_dir = get_bloginfo('template_directory');	
	wp_enqueue_style('thickbox');
	wp_enqueue_style("style", $theme_dir . "/functions/css/op_style.css");
	wp_enqueue_style("cpicker", $theme_dir . "/functions/js/farbtastic.css");	
}
if ( isset($_GET['page']) && $_GET['page'] == 'theme-options.php') {
    add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
}	
add_action('admin_menu', 'mytheme_add_admin');

function mytheme_admin() {
global $themename, $shortname, $options;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p>'.$themename.' 佈景選項<b>儲存</b>成功。</p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p>'.$themename.' 佈景選項<b>重置</b>成功。</p></div>';
?>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/functions/js/farbtastic.js'></script>
<div class="op_wrapper wrap">


	<div id="icon-themes" class="icon32"><br></div>
	<h2><?php echo $themename; ?> 佈景設定選項</h2>
 
	<h2 class="op_list nav-tab-wrapper">
		<?php 
			$i = 1;
			foreach ($options as $value) {
				switch ( $value['type'] ) {
				case 'section':	
					if($value['name']):
			?>		
		<a class="nav-tab<?php if( $i == 1 ): ?> nav-tab-active<?php endif; ?>"><?php echo $value['name']; ?></a>
		<?php	endif; 
				}$i++;
			}
		?>
	</h2>
	<div class="op_content">
		<form method="post">	
		<?php
			
			foreach ($options as $value) {
				switch ( $value['type'] ) {
				case 'section':	
		?>				
				<?php echo $value['desc']; ?>
				<?php if($value['name']){?>
					<div class="section_content">
				<?php } ?>
		<?php break; case 'close':?></div>
		<?php break; case 'line':?>
<div class="op_input op_text op_line">	
<?php echo $value['desc']; ?>
</div>		
		<?php   break;
				case 'upload':
		?>
<div class="op_input op_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
	<input id="<?php echo $value['id']; ?>" class="upload_input" type="text" size="90" name="<?php echo $value['id']; ?>" value="<?php echo(get_option($value['id'])); ?>" />
	<div class="upload_button">
		<input class="upload_image_button button-secondary" id="upload_image_button" type="button" value="上傳圖片" />
	</div>
	<?php $preview = get_option($value['id']);if ($preview) { ?>
	<div class="upload_preview">右方為你所上傳的圖片：</div>
		<img src="<?php echo(get_option($value['id'])); ?>" class="up_img">
    <?php } ?>
 	<small><?php echo $value['desc']; ?></small>	
 	<div class="clear"></div>
 	
</div>                
 		<?php   break;
				case 'text':
		?>               
 
<div class="op_input op_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" 
 	value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
	<?php if( $value['color'] == true){ ?>
 			<div class="upload_preview">右方可選擇顏色：</div>
 			<div class="<?php echo $value['id']; ?>" id="picker"></div>
 			
 			<?php } ?>
 	<small>
<?php if( $value['color'] == true){ ?>
常用顏色 : <br>
藍色 #5EA8DE<br>
水藍色 #2DB3E9<br>
深藍色 #006AC1<br>
亮藍色 #19BFE5<br>
橘色 #FF6633<br>
綠色 #15992A<br>
紫色 #7200AC<br>
灰色 #696969<br>
紅色 #B81B1B<br>
粉紅色 #FF3366<br>
咖啡色 #632F00<br>
黑色 #222222<br>
			<?php } ?>
 		<?php echo $value['desc']; ?>	
 	</small>
 	
 	<div class="clear"></div>
 
</div>
	
		<?php
				break;
				case 'textarea':
		?>

<div class="op_input op_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>"><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	<small><?php echo $value['desc']; ?></small>
	
	<div class="clear"></div>
 
</div>
  
		<?php
				break;
				case 'select':
		?>

<div class="op_input op_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
		<?php foreach ($value['options'] as $option) { ?>
			<option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
		<?php } ?>
	</select>

	<small><?php echo $value['desc']; ?></small>
	
	<div class="clear"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="op_input op_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
	<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{  $checked = "";} ?>
	
	<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="1" <?php echo $checked; ?> />

	<small><?php echo $value['desc']; ?></small>
	
	<div class="clear"></div>
</div>

<?php
break;
 
case "radio":
?>

<div class="op_input op_radio">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
	<div class="radio_sec">
<?php foreach ($value['options'] as $option) { ?>
	<?php if(get_option($value['id']) == $option['slug'] || ( get_option($value['id']) == '' && $value['std'] == $option['slug'] )){ $checked = "checked=\"checked\""; }else{  $checked = "";} ?>
	<input type="radio" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php echo $option['slug']; ?>" <?php echo $checked; ?> /><?php echo $option['title']; ?><br />
<?php } ?>	
	</div>

	<small><?php echo $value['desc']; ?></small>
	
	<div class="clear"></div>
</div>
<?php break;
}
}
?>
</div>
<form method="post">	
	<input type="hidden" name="action" value="save" />
	<input name="save" class="save" type="submit" value="儲存變更" />
</form>
	
<form method="post">	
	<input name="reset" class="reset" type="submit" value="全部重置" />
	<input type="hidden" name="action" value="reset" />
</form>


 
 
</div> 

<script type="text/javascript">
jQuery(document).ready(function(){ 
	jQuery('.<?php echo $shortname."color"; ?>').farbtastic('#<?php echo $shortname."color"; ?>');
	jQuery('.<?php echo $shortname."txtcolor"; ?>').farbtastic('#<?php echo $shortname."txtcolor"; ?>'); 
        jQuery('.nav-tab').click(function(){
			jQuery(this).addClass("nav-tab-active").siblings().removeClass("nav-tab-active");
			jQuery(".op_section").slideUp('10000').eq(jQuery('.nav-tab').index(this)).slideDown('10000');
		});
});
</script>
<?php } ?>