<?php
/**
 * Main application of Monitor.
 * 
 * Main application of Monitor.
 * 1. Confirm login
 * 2. Retrun application skelton and js apps which get fresh data and pics and refresh page.
 * 
 * Requires $_GET['serial_id']
 * 
 * @author Dr. Takeyuki UEDA
 * @copyright Copyright© Atelier UEDA 2017 - All rights reserved.
 *
 */
?>

<!DOCTYPE html>
<html lang="ja" id="demo">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>タイトル</title>
 <!--
  <link rel="stylesheet" href="https://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="https://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>-->
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- VUE start -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js'></script>
  <!-- VUE end -->

  <!-- BOOTSTRAP start -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <!-- BOOTSTRAP end -->

  <script src="https://use.fontawesome.com/f005d6ab52.js"></script>
</head>
<body>

<!-- <div data-role="page"> -->
    
<!-- <div data-role="header" data-position="fixed" data-disable-page-zoom="false">
  <h1>タイトル</h1>
  <a href="index.php?serial_id=<?= $serial_id?>" data-rel="back">戻る</a>
</div>-->
<!-- refer https://spyweb.media/2017/10/30/css-flexbox-center-logo-left-right-button-smart-phone-header-menu/ -->
<header class="header">
  <div class="button btn">
    <i class="fa fa-fw fa-bars" aria-hidden="true"></i>
  </div>
  <h4 class="logo">LOGO</h4>
  <div class="button btn">
    <i class="fa fa-fw fa-search" aria-hidden="true"></i>
  </div>
</header>
<style>
/* https://spyweb.media/2017/10/30/css-flexbox-center-logo-left-right-button-smart-phone-header-menu/ */
.header {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
/*  padding: .8em 1.2em; */
  padding: .5em 1.2em; 
  background-color: #222;
  border-color: #080808;
}
.logo {
  margin: 0 auto;
/*  text-decoration: none;*/
  text-shadow: none;
  color: white;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.copyright {
  margin: 0 auto;
/*  text-decoration: none;*/
  color: #333;
  text-shadow: 0 1px 0 #fff;
/*  color: white; */
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.button {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
/* https://saruwakakun.com/html-css/reference/buttons */
.btn{
/*    display: inline-block; */
    position: relative;
    text-decoration: none;
/*    color: #f9a9ae;*/
    color: #aeaeae;
/*    width: 120px;
    height: 50px;
    line-height: 50px; */
/*    border-radius: 5px; */
    border-radius: 50px;
    text-align: center;
    vertical-align: middle;
    overflow: hidden;
    font-weight: bold;
/*    background-image: -webkit-linear-gradient(#fed6e3 0%, #ffaaaa 100%);
    background-image: linear-gradient(#fed6e3 0%, #ffaaaa 100%);*/
    background-image: -webkit-linear-gradient(#444 0%, #2d2d2d 100%);
    background-image: linear-gradient(#444, #2d2d2d);
    text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.66);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.28);
}
.btn:active{/*押したとき*/
    -ms-transform: translateY(2px);
    -webkit-transform: translateY(2px);
    transform: translateY(2px);/*沈むように*/
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.15);
/*    background-image: -webkit-linear-gradient(#fed6e3 0%, #ffbcbc 100%);
    background-image: linear-gradient(#fed6e3 0%, #ffbcbc 100%);/*グラデーションを明るく*/
    background-image: -webkit-linear-gradient(#555 0%, #3d3d3d 100%);
    background-image: linear-gradient(#555, #3d3d3d);
}
/* refer:
 https://qiita.com/hashrock/items/939684b9207dbab1d59e
 https://qiita.com/engulisyu/items/999c743e084056ff36d4
*/
body{
    margin: 0;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}
.content{
    flex-grow: 1;
}
footer{
    display: flex;
    justify-content: space-around;
    width: 100%;
    background-color: #222;
    border-color: #080808;
}
</style>

<!--  <div id="footer" style="background-color: #aaa;
    height: 0px;
    text-align: center;
    line-height: 40px;
    color : #fff;
    margin-top:30px;"><h4>© Atelier UEDA🐸</h4>
  </div>-->
<div class="content">
本文だよ
</div>
<!-- <div data-role="footer" data-position="fixed" data-disable-page-zoom="false">
    <h4>© Atelier UEDA🐸</h4>
</div> -->
<footer>
  <div class="copyright">
    <h4>© Atelier UEDA🐸</h4>
  </div>
</footer>

<!--</div> --> <!-- page -->

</body>
<style>

</style>
</html>
