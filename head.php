<?php
$fileName=basename($_SERVER['PHP_SELF']);
$root='./';
switch($fileName){
  case 'd_2.php':
  case 'd_3.php':
    $root='../';
    break;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>タイトル</title>
        <link rel="stylesheet" href="<?=$root?>css/reset.css">
        <link rel="stylesheet" href="<?=$root?>css/slick.css">
        <link rel="stylesheet" href="<?=$root?>css/slick-theme.css">
        <link rel="stylesheet" href="<?=$root?>css/main.css">
      
         <!--js  -->
      <script  src="<?=$root?>js/vendor/jquery-1.12.4.min.js"></script>
      <script  src="<?=$root?>js/vendor/jquery-ui-1.12.1.min.js"></script>
      <script  src="<?=$root?>js/vendor/jquery.easing.1.3.js"></script>
      <script  src="<?=$root?>js/pageTopLink.js"></script>
      <script  src="<?=$root?>js/main.js"></script>
    
    </head>
    <body onload="init()">
        <div class="container">
            <header>
                <img id="headerLogo" src="<?=$root?>images/ansin-logo.svg" alt="株式会社 安心典礼">
                <p>年中無休・24時間対応　TEL:044-975-3853 (代表)　事前相談、無料でお受けいたします</p>
            </header>
            <nav>
            <ul>
      <li class="<?=$fileName ==='index.php' ? 'active':''?>"><a href="<?=$root?>index.php">Home</a></li>
      <li class="has-child <?= in_array($fileName,['d_2.php','d_3.php','kazoku.php'])? 'active':''?>"><a href="#">価格別葬儀祭壇</a>
        <ul>
        <li class="<?=$fileName ==='kazoku.php' ? 'active':''?>"><a href="<?=$root?>kazoku.php">家族葬/一日葬/直葬</a></li>
        <li class="<?=$fileName ==='d_3.php' ? 'active':''?>"><a href="<?=$root?>price/d_3.php">やや費用を抑えたい</a></li>
        <li><a href="#">一般的な葬儀価格帯</a></li>
        <li><a href="#">立派にしてあげたい</a></li>
        <li><a href="#">川崎市市民葬儀</a></li>
        </ul>
      </li>
      <li class=""><a href="#">少額短期葬儀保険</a>
      </li>
      <li class="has-child"><a href="#">ホール・葬儀場</a>
        <ul>
        <li class="<?=$fileName ==='hall.php' ? 'active':''?>"><a href="<?=$root?>hall.php">フューネラルホール（自社）</a></li>
        <li class="<?=$fileName ==='kasoba.php' ? 'active':''?>"><a href="<?=$root?>kasoba.php">一般葬祭場・式場一覧</a></li>
        </ul>
      </li>
      <li class=""><a href="#">寺院・霊園・石材店</a>
      </li>
      <li class="has-child"><a href="#">葬儀の知識</a>
        <ul>
        <li><a href="#">役立つ葬儀ガイド</a></li>
        <li><a href="#">葬儀豆知識</a></li>
        </ul>
      </li>
      <li class="has-child"><a href="#">暮らし</a>
        <ul>
        <li><a href="#">行政関係(弁護士・行政書士)</a></li>
        <li><a href="#">老人ホーム・介護施設</a></li>
        <li><a href="#">安心の会</a></li>
        <li><a href="#">企業提携先一覧</a></li>
        </ul>
      </li>
      <li class="has-child <?=$fileName ==='contact.php' ? 'active':''?>"><a href="<?=$root?>contact.php">お問い合わせ</a> 
        <ul>
        <li><a href="#">メールフォーム</a></li>
        <li><a href="#">会社概要</a></li>
        </ul>
    </li>
    </ul>
    </nav>
