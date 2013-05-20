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
              <h1>Andro Chen's Projects</h1>
              <h3>2013</h3>
              <ul class="project">
                <li>
                  <div class="project-title">
                    Language Exchange Website - <a href="http://languagexbook.com">LanguageXBook</a>
                  </div>
                  <div class="project-box">
                    <div class="project-img"><a href="http://languagexbook.com"><img src="<?=base_url("img/project/xbook.jpg")?>"></a></div>
                    <div class="project-caption">
                      <p><a href="http://www.languagexbook.com">LanguageXBook</a> 是一個在地化的語言交換社群，讓搜尋你身邊的語言交換者變得更簡單! 結合 Google Maps ，讓你可以快速地找到在你附近有意願的語言交換者。透過 Facebook 登入，你也可以發佈屬於自己的資訊讓他人知道。</p> 
                      <div class="project-readmore"><a href="http://languagexbook.com">>> Read more...</a></div>
                    </div>
                    
                  </div>  
                </li>

              </ul>

              <h3>2012</h3>
              <ul class="project">
                <li>
                  <div class="project-title">
                    5945 呼叫師傅 - <a href="http://ask.5945.tw">5945 Ask</a>
                  </div>
                  <div class="project-box">
                    <div class="project-img"><a href="http://ask.5945.tw"><img src="<?=base_url("img/project/5945-ask.jpg")?>"></a></div>
                    <div class="project-caption">
                      <a href="http://ask.5945.tw">5945 Ask</a> 是專業的裝修知識問答平台。裝潢修繕的大小問題，都可以透過 5945 Ask 詢問，並由網站上專業的師傅、達人為您解惑。
                      <div class="project-readmore"><a href="http://ask.5945.tw">>> Read more...</a></div>
                    </div>                    
                  </div>  
                </li>
              </ul>
              <ul class="project">
                <li>
                  <div class="project-title">
                    Andro's Facebook SDK Demo - <a href='http://androdemo.qov.tw/fb-login-jssdk'>Mobile Web Tutorial</a>
                  </div>
                  <div class="project-box">
                    <div class="project-img"><a href="http://androdemo.qov.tw/fb-login-jssdk"><img src="<?=base_url("/img/project/fb-mobile-web.jpg")?>"></a></div>
                    <div class="project-caption">
                      本 Demo 頁將呈現 <a href="http://androsays.qov.tw/?p=18">Step by step – 5 步實作 Facebook Mobile Web</a> 的實作內容，為您示範如何輕鬆又正確地利用 Facebook 作為您網站開發的一部份。在 <a href="https://github.com/andro0929/fb-login-jssdk">Github</a> 上也有原始碼可供下載。
                      <div class="project-readmore"><a href="<http://androdemo.qov.tw/fb-login-jssdk">>> Read more...</a></div>
                    </div>                    
                  </div>  
                </li>
              </ul>

              <h3>2011</h3>
              <ul class="project">
                <li>
                  <div class="project-title">
                    Android Bluetooth Game - <a href="http://youtu.be/5qgyW8r4ook">Voice Fighter</a>
                  </div>
                  <div class="project-box">
                    <div class="project-img"><a href="http://youtu.be/5qgyW8r4ook"><img src="<?=base_url("img/project/voice-fighter.jpg")?>"></a></div>
                    <div class="project-caption">
                      <p><a href="http://youtu.be/5qgyW8r4ook">Voice Fighter</a> 是一款藍芽連線對戰遊戲。與大型機台遊戲"街頭快打"類似。遊戲中您將扮演 Android 或是 Apple 陣營，妥善地運用武器與盾牌擊敗對方。最重要的是，您能夠用聲控發射終極大絕招，一舉擊垮對手。</p> 
                      <div class="project-readmore"><a href="http://youtu.be/5qgyW8r4ook">>> 觀看 Demo 影片</a></div>
                    </div>
                    
                  </div>  
                </li>
              </ul>
            </div>
         </div>
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