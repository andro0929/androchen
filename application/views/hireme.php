<!DOCTYPE html>
<html lang="zh-tw"
    xmlns:fb="http://www.facebook.com/2008/fbml"
    xmlns:og="http://ogp.me/ns#">
<head>
  <?php include("_site_header.php");?>
</head> 

<body> 
  <div id="navbar">
    <?php include("_navbar.php");?>
  </div>
  <div id="body-container">
    <div id="content">
      <div class="container">
        <h1>Andro Chen's Resume</h1>
        <div id="hireme-img"><img src="<?=base_url("img/hireme.jpg")?>"></div>
        <div id="hireme-pdf"><i class="icon-play"></i> <a href="<?=base_url("asset/resume_AndroChen.pdf")?>">Download as PDF</a> or <a href='mailto:andro0929@gmail.com' title="Send email to Andro"><img src="img/icon/gmail.png" target="blank"></a></div>
      </div>  
    </div>
    <!-- content ends -->
  </div>
  <!-- body-container ends -->
  <div id="footer-container">
    <?php include("_site_footer.php");?>  
  </div>
</body>
</html>