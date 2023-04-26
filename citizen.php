<?php
session_start();
?>
<?php include('head.php');?>
<div id="subSliderBox">
<div id="subSlider">
         <div><a href="hall.php"><img alt="画像1" src="<?=$root?>images/sub-slider/PR_hall.jpg" /></a></div>
         <div><a href="ansin.php"><img alt="画像2" src="<?=$root?>images/sub-slider/PR_ansin.jpg" /></a></div>
</div>
</div>
<main id="price">
  <h1>◇ 川崎市市民葬儀とは</h1>
<br/>
  <h2>制度の内容</h2>
  
 <div id="priceBox">
<p id="priceList">川崎市には市民の皆さまが葬儀を行うひとつの目安となるように、市民葬儀制度があります。<br/>
<br/>
この制度は川崎市市民葬儀取扱指定店の協力により、予め葬儀の内容と価格が決まっています。<br/>
（制度の利用開始は、令和4年4月1日からです）</p>
<br/>
<br/>
<p id="priceList">市民葬儀規格は次の2種類です。<br/>
<br/>
※対象者：川崎市に在住の市民<br/>
（亡くなられた方、もしくは、施主となる方が川崎市民である場合に利用可能）</p>
<br/>
<br/>
<table width="740" border="0" style="border:1px solid #000;" cellspacing="2" cellpadding="2">
  <tr bgcolor="#9F867B">
    <td colspan="4" align="center"><font color="#FFFFFF">～川崎市市民葬儀規格～</font></td>
  </tr>
  <tr>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>
  <tr>
  <td width="20">&nbsp;</td>
  <td width="330" align="center">
  <table width="330" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="330" align="center"><strong>- 規格A（一般葬）-</strong></td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">495,000円（税込）</td>
  </tr>
  <tr>
    <td width="330" align="center">祭壇 、棺、仏衣等内容具</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">遺体安置（2日）、 遺体搬送（2回）</td>
  </tr>
  <tr>
    <td width="330" align="center">骨壺一式 （白7寸・桐箱・布覆含む）</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">枕飾り、遺影写真（四つ切・黒額）</td>
  </tr>
  <tr>
    <td width="330" align="center">受付事務用品、葬儀運営スタッフ</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">火葬場案内スタッフ、諸手続き代行</td>
  </tr>
  </table>
  </td>
  <td width="330" align="center">
  <table width="330" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="330" align="center"><strong>- 規格B（火葬式）-</strong></td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">209,000円（税込）</td>
  </tr>
  <tr>
    <td width="330" align="center">棺のみ</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">遺体安置（2日）、 遺体搬送（2回）</td>
  </tr>
  <tr>
    <td width="330" align="center">骨壺一式 （白7寸・桐箱・布覆含む）</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">-</td>
  </tr>
  <tr>
    <td width="330" align="center">-</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="330" align="center">火葬場案内スタッフ、諸手続き代行</td>
  </tr>
  </table>
    </td>
    <td width="20">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>  
</table>





<br/>
<br/>
<br/>
<h2>お申込み方法</h2>
<p id="priceList">区役所区民課、支所区民センター、出張所にある（市民葬儀葬祭券）にご記入の上、取扱指定店に直接申し込みます。<font color="#FF0000"><strong>弊社、株式会社安心典礼も取扱指定店</strong></font>となっております。<br/>
<br/>
<br/>
どんなことでもお気軽にお問い合わせください。<br/>
川崎市葬儀/宮前区葬儀/真心の葬儀<br/>
電話：044-975-3853
<br/>
<br/>
<br/>
市民葬については川崎市のホームページもご覧ください。<a href="https://www.city.kawasaki.jp/350/page/0000021911.html" target="new">こちら ＞＞</a></p>
<br/>
<br/>
</div>



<script src="<?=$root?>js/vendor/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('#subSlider').slick({
    autoplay:true,
    autoplaySpeed:5000,
  });
});
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</main>
<?php include('foot.php');?> 
