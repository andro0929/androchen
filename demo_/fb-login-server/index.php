<h1>Server-side Facebook Login - Implement</h1>
<p>Reference: <a href="https://developers.facebook.com/docs/howtos/login/server-side-login/">[FB] Login for Server-side Apps</a></p>
<hr>
<p>
<?php 
  $app_id = "300177676757981";
  $app_secret = "1dd3233476795a6a69dddc44f5145c75";
  $my_url = "http://androchen.qov.tw/tools/fb-login-server/";

  session_start();

  $code = $_REQUEST["code"];

  if(empty($code)) {
     $_SESSION['state'] = md5(uniqid(rand(), TRUE)); // CSRF protection
     $dialog_url = "https://www.facebook.com/dialog/oauth?client_id=" 
       . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
       . $_SESSION['state'] . "&scope=user_birthday,read_stream";

     header("Location: " . $dialog_url);
   }

   if($_SESSION['state'] && ($_SESSION['state'] === $_REQUEST['state'])) {
     $token_url = "https://graph.facebook.com/oauth/access_token?"
       . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
       . "&client_secret=" . $app_secret . "&code=" . $code;

     $response = file_get_contents($token_url);
     $params = null;
     parse_str($response, $params);

     $_SESSION['access_token'] = $params['access_token'];

     $graph_url = "https://graph.facebook.com/me?access_token=" 
       . $params['access_token'];

     $user = json_decode(file_get_contents($graph_url));
     var_dump($user);
   }
   else {
     echo("The state does not match. You may be a victim of CSRF.");
   }
?>
</p>
<a href="https://github.com/andro0929/fb-login-server"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>