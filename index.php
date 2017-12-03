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
<!--  <link rel="stylesheet" href="https://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
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
  <style>
  .footer{
    color: #333;
    text-shadow: 0 1px 0 #fff;
  }
  </style>
</head>
<body>

<!-- <div data-role="page"> -->
    
<!-- <div data-role="header" data-position="fixed" data-disable-page-zoom="false">
  <h1>タイトル</h1>
  <a href="index.php?serial_id=<?= $serial_id?>" data-rel="back">戻る</a>
</div>-->
<nav class="navbar navbar-default navbar-static-top navbar-inverse" style="position: relative;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample10">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- for title centering, refer https://stackoverflow.com/questions/23400234/centering-brand-logo-in-bootstrap-3-navbar -->
      <a class="navbar-brand" href="#" style="position: absolute;
    left: 50%;
    margin-left: -50px !important;  /* 50% of your logo width */
    display: block;">
        <p style="color: white; font-weight: bold">タイトル</p>
      </a>
    </div>
    
    <div class="collapse navbar-collapse" id="navbarEexample10">
      <ul class="nav navbar-nav">
        <li><a href="#">戻る</a></li>
      </ul>
      <a href="#" type="button" class="btn btn-default navbar-btn navbar-left">けろけろ</a>
      <p class="navbar-text navbar-right">ようこそ <a href="#" class="navbar-link">ゲスト</a> さん。</p>
    </div>
  </div>
</nav>


<!--  <div id="footer" style="background-color: #aaa;
    height: 0px;
    text-align: center;
    line-height: 40px;
    color : #fff;
    margin-top:30px;"><h4>© Atelier UEDA🐸</h4>
  </div>-->

<!-- <div data-role="footer" data-position="fixed" data-disable-page-zoom="false">
    <h4>© Atelier UEDA🐸</h4>
</div> -->
<div class="footer navbar-inverse navbar-fixed-bottom" >
    <h4 class="text-center" style="font-weight: bold">© Atelier UEDA🐸</h4>
</div>

<!--</div> --> <!-- page -->

</body>
</html>
