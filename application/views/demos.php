<!DOCTYPE html>
<html lang="zh-tw">
<head>
  <?php include("_site_header.php");?>
</head> 

<body> 
  <div id="navbar">
    <?php include("_navbar.php");?>
  </div>
  <div id="body-container">
    <div id="content">
      <div class="container container-fluid">
       <div class="row-fluid">
        <div class="span3">
          <?php include("_sidebar.php");?>
        </div>
        <div class="span9">
          <!--Body content-->
          <h2>AndroDemo - Useful WebDev Tools</h2>
          <h3>PHP, CodeIgniter</h3>
          <dl class="dl-horizontal">
            <dt><a href="http://androdemo.qov.tw/package-ci-bootstrap">package-ci-bootstrap</a></dt>
            <dd>結合了 CodeIgniter 與 Bootstrap 的網頁版型，下載後直接啟用<br>Quick package for <strong>CodeIgniter and Bootstrap </strong> combination.</dd>
            <dt><a href="http://androdemo.qov.tw/ci-pagination">ci-pagination</a></dt>
            <dd>使用 Codeigniter 實作資料分頁<br>Implementation of <strong>pagination of CodeIgniter</strong>, using <a href="https://github.com/andro0929/package-CI-bootstrap">my package-CI-Bootstrap on GitHub</a> to accomplish further development.</dd>
            <dt><a href="http://androdemo.qov.tw/ci-recaptcha">ci-recaptcha</a></dt>
            <dd>使用 CodeIgniter 實作 reCaptcha 登入驗證<br>Implementation of <a href="https://github.com/Cnordbo/RECaptcha-for-Codeigniter">Cnordbo's RECaptcha-for-Codeigniter</a>, while the whole CI-setup and re-layout views are included.</dd>
          </dl>

          <h3>Facebook SDK</h3>
          <dl class="dl-horizontal">
            <dt><a href="http://androdemo.qov.tw/fb-login-jssdk">fb-login-jssdk</a></dt>
            <dd><strong>Client-side</strong> login of Facebook using jssdk.</dd>
            <dt><a href="http://androdemo.qov.tw/fb-login-server">fb-login-server</a></dt>
            <dd><strong>Server-side</strong> login of Facebook using php.</dd>
          </dl>

          <h3>Others</h3>
          <dl class="dl-horizontal">
            <dt><a href="https://github.com/andro0929/gaphp">gaphp</a></dt>
            <dd>Using PHP to request report data from <strong>Google Analytics</strong>.</dd>
          </dl>
        </div>
      </div>
    </div>  
    <a href="https://github.com/andro0929"><img style="position: absolute; top: 99px; margin-left:770px; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
  </div>
  <!-- content ends -->
</div>
<!-- body-container ends -->
<div id="footer-container">
  <?php include("_site_footer.php");?>  
</div>
</body>
</html>