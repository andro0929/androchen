<?php
    $sprite_img_src = base_url("img/icon_sprite.png");
    $href_gmail = "mailto:andro0929@gmail.com";
    $href_fb = "http://www.facebook.com/AndroChen0929";
    $href_gplus = "https://plus.google.com/118026338822127492529/about";
    $href_linkedin = "http://www.linkedin.com/in/androchen";
    $href_github = "https://github.com/andro0929";
    $href_blogger = "http://androchen.blogspot.tw/";
    $href_wordpress = "http://androsays.qov.tw";
    $href_portfolio = base_url("asset/portfolio_AndroChen.pdf");
?>
<!--Sidebar content-->
<div id="sidebar-andro-img"><img src="<?=base_url("img/andro.jpg")?>" alt="Andro Chen"></div>
<div id="sidebar-andro-name">陳俊安 <span>Chen Chun-An</span></div>
<div class="sidebar-social-info">
    <a href="<?=$href_gmail?>" id="sidebar-icon-gmail"
    	title="Send email to Andro" target="blank">
    	<img src="<?=$sprite_img_src?>" alt="Gmail"></a>
    <a href="<?=$href_fb?>" id="sidebar-icon-fb"
    	title="Find Andro on Facebook" target="blank">
    	<img src="<?=$sprite_img_src?>" alt="Facebook"></a>
    <a href="<?=$href_gplus?>" id="sidebar-icon-gplus" 
        title="Find Andro on Google+" target="blank">
    	<img src="<?=$sprite_img_src?>" alt="Google+"></a>
    <a href="<?=$href_linkedin?>" id="sidebar-icon-linkedin"
    	title="Find Andro on LinkedIn" target="blank">
    	<img src="<?=$sprite_img_src?>" alt="LinkedIn"></a>
    <a href="<?=$href_github?>" id="sidebar-icon-github"
    	title="Find Andro on Github" target="blank">
    	<img src="<?=$sprite_img_src?>" alt="Github"></a>
</div>
<div class="sidebar-social-info">    
    <a href="<?=$href_blogger?>" id="sidebar-icon-blogger"
        title="My Blogger - Andro Tips" target="blank">
        <img src="<?=$sprite_img_src?>" alt="Andro Tips"></a>
    <a href="<?=$href_wordpress?>" id="sidebar-icon-wordpress"
        title="My Wordpress - Andro Says" target="blank">
        <img src="<?=$sprite_img_src?>" alt="Andro Says"></a>
    <a href="<?=$href_portfolio?>" id="sidebar-icon-portfolio"
        title="My Portfolio" target="blank">
        <img src="<?=$sprite_img_src?>" alt="My Portfolio"></a>
</div>