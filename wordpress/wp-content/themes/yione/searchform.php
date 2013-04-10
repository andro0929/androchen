<?php
$theme_module = get_bloginfo('template_directory')."/module/";
?>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" _lpchecked="1" class="form-search">
	<fieldset>
		<input type="text" placeholder="搜尋..." onfocus="if (this.value=='搜尋...') {this.value=''}"  value="搜尋..." name="s" id="s" x-webkit-speech onwebkitspeechchange="transcribe(this.value)" />
		<input id="search-image" class="sbutton" type="image" src="<?php echo $theme_module ?>/images/search.png">
	</fieldset>
</form>