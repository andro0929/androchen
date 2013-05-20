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
              <div class="content-text">
                <h3><i class="icon-play index-li"></i> Andro Chen is a Web Developer</h3>
                <p>我是一位網頁工程師，專注於 HTML5, PHP, JavaScript 開發。</p>
                <p>將於 2013/7 畢業自台大電機系。</p>
                <br>
                <h3><i class="icon-play index-li"></i> And I'm Now Working for 5945 and beBit</h3>
                <p>現正積極尋找 <b>網站開發，使用者經驗</b> 相關工作。</p>
                <p>我勇於接受各種挑戰，積極地學習各項新事物，並對自己的語言、溝通能力非常有自信。</p>
                <p>曾在 <a href="http://5945.tw">5945 呼叫師傅</a> 擔任軟體工程師(實習)一職。</p>
                <p>目前自創並經營語言交換網站 - <a href="http://www.languagexbook.com/">LanguageXBook</a>。</p>
                <br>
                <h3><i class="icon-play index-li"></i> With Passion To Learn and Creativity At Work</h3>
                <p>我十分樂於學習新東西，時常廣泛接觸各面向知識，使自己不斷進步。</p>
                <p>對<b>服務設計</b>, 電子商務, 藝術設計與<b>行銷</b>等皆有涉獵。</p>
                <div id="hireme-pdf"><i class="icon-play"></i> <a href="<?=base_url("asset/resume_AndroChen.pdf")?>">View My Resume</a> or <a href="<?=base_url("asset/portfolio_AndroChen.pdf")?>">My Portfolio</a></div>
              </div>
              <br>
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