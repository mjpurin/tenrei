<?php
$fileName=basename($_SERVER['PHP_SELF']);
$root='./';
switch($fileName){
  case 'a_1.php':
  case 'a_2.php':
  case 'a_3.php':
  case 'b_1.php':
  case 'b_2.php':
  case 'b_3.php':
  case 'c_1.php':
  case 'c_2.php':
  case 'c_3.php':
  case 'd_1.php':
  case 'd_2.php':
  case 'd_3.php':
  case 'd_4.php':
  case 'jikiso.php':
  case 'list01.php':
  case 'list02.php':
  case 's_1.php':
  case 's_2.php':
  case 's_3.php':
  case 'step01.php':
  case 'step02.php':
  case 'step03.php':
  case 'step04.php':
  case 'step05.php':
  case 'step06.php':
  case 'step07.php':
  case 'step08.php':
  case 'know01.php':
  case 'know02.php':
  case 'know03.php':
  case 'know04.php':
  case 'know05.php':
  case 'know06.php':
  case 'know07.php':
  case 'know08.php':
  case 'know09.php':
    $root='../';
    break;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>川崎市の葬儀なら 安心典礼</title>
        <meta name="keywords" content="安心典礼,葬儀,安心,川崎市,宮前区,無料相談">
		<!--descpription 検索でヒットした時に紹介文として表示される-->
        	<meta name="description" content="安心典礼は川崎市宮前区にある葬儀社です。人生最後のセレモニーを真心を込めて全力でサポートいたします。">
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
      <li class="has-child <?= in_array($fileName,['kazoku.php','list01.php','list01.php#normal','list02.php','citizen.php','a_1.php','a_2.php','a_3.php','b_1.php','b_2.php','b_3.php','c_1.php','c_2.php','c_3.php','d_1.php','d_2.php','d_3.php','d_4.php','jikiso.php','s_1.php','s_2.php','s_3.php'])? 'active':''?>"><a href="#">価格別葬儀祭壇</a>
        <ul>
        <li><a href="<?=$root?>kazoku.php">家族葬/一日葬/直葬</a></li>
        <li><a href="<?=$root?>price/list01.php">やや費用を抑えたい</a></li>
        <li><a href="<?=$root?>price/list01.php#normal">一般的な葬儀価格帯</a></li>
        <li><a href="<?=$root?>price/list02.php">立派にしてあげたい</a></li>
        <li><a href="<?=$root?>citizen.php">川崎市市民葬儀</a></li>
        </ul>
      </li>
      <li class="<?=$fileName ==='hoken.php' ? 'active':''?>"><a href="<?=$root?>hoken.php">少額短期葬儀保険</a>
      </li>
      <li class="has-child <?= in_array($fileName,['hall.php','sousaijyo.php','kasoba.php'])? 'active':''?>"><a href="#">ホール・火葬場</a>
        <ul>
        <li><a href="<?=$root?>hall.php">フューネラルホール（自社）</a></li>
        <li><a href="<?=$root?>sousaijyo.php">葬祭場・式場（公営・民営）</a></li>
        <li><a href="<?=$root?>kasoba.php">火葬場一覧（公営・民営）</a></li>
        </ul>
      </li>
      <li class="has-child <?= in_array($fileName,['step01.php','step02.php','step03.php','step04.php','step05.php','step06.php','step07.php','step08.php','know01.php','know02.php','know03.php','know04.php','know05.php','know06.php','know07.php','know08.php','know09.php'])? 'active':''?>"><a href="#">葬儀の知識</a>
        <ul>
        <li><a href="<?=$root?>guide/step01.php">葬儀ガイド</a></li>
        <li><a href="<?=$root?>guide/know01.php">葬儀豆知識</a></li>
        </ul>
      </li>
      <li class="<?=$fileName ==='reien.php' ? 'active':''?>"><a href="<?=$root?>reien.php">霊園・石材店</a>
      </li>
      <li class="has-child <?= in_array($fileName,['gyosei.php','rohome.php','kigyo.php','ansin.php'])? 'active':''?>"><a href="#">暮らし</a>
        <ul>
        <li><a href="<?=$root?>gyosei.php">行政・法律関係</a></li>
        <li><a href="<?=$root?>rohome.php">老人ホーム・介護施設</a></li>
        <li><a href="<?=$root?>kigyo.php">提携先企業・加盟団体</a></li>
        <li><a href="<?=$root?>ansin.php">安心の会</a></li>
        </ul>
      </li>
      <li class="<?=$fileName ==='contact.php' ? 'active':''?>"><a href="<?=$root?>contact.php">お問い合わせ</a></li>
      <li class="<?=$fileName ==='about.php' ? 'active':''?>"><a href="<?=$root?>about.php">会社概要</a></li>
    </ul>
    </nav>
