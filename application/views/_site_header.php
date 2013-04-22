<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?=base_url("css/bootstrap.min.css")?>">
<link rel="stylesheet" href="<?=base_url("css/bootstrap-responsive.min.css")?>">
<link rel="stylesheet" href="<?=base_url("css/addon.css")?>">  
<link rel="stylesheet" href="<?=base_url("css/site.css")?>">
<link rel='icon' type='image/x-icon' href="<?=base_url("img/favicon.ico")?>"> 

<meta name="robots" content="all">
<meta name="keywords" content="Andro,Andro Chen,andro0929,陳俊安,Web Developer,網站工程師,網頁工程師">
<meta name="author" content="Andro Chen">
<meta name="dcterms.rights" content="本網頁著作權屬Andro Chen(陳俊安)所有">
<meta name="dcterms.dateCopyrighted" content="2013">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<!-- Essential information for Open Graph -->
<meta property="og:title" content="Andro Chen's Website - 陳俊安的個人網站與作品集" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Andro Chen's Website - 陳俊安的個人網站與作品集" />
<meta property="og:description" content=" Andro Chen is a Web Developer. 陳俊安是一個網頁工程師，專注於 HTML5, PHP, JavaScript 開發。將於 2013/7 畢業自台大電機系。現正積極尋找 網站開發，使用者經驗 相關工作。" />
<meta property="og:url" content="http://androchen.qov.tw/"/>
<meta property="og:image" content="<?=base_url("img/andro.png")?>"/>

<title>
	<?php
		if(isset($pageTitle)) {
			echo $pageTitle;
		} else {
			echo "Andro Chen's Website - 陳俊安的個人網站與作品集";
		}
	?>	
</title>

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