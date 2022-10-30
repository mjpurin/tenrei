<?php
session_start();
?>
<?php include('../head.php');?>
<div id="subSliderBox">
<div id="subSlider">
         <div><a href="../hall.php"><img alt="画像1" src="<?=$root?>images/sub-slider/PR_hall.jpg" /></a></div>
         <div><a href="../ansin.php"><img alt="画像2" src="<?=$root?>images/sub-slider/PR_ansin.jpg" /></a></div>
</div>
</div>
<main id="price">
  <h1>◇ 役に立つ葬儀のまめ知識</h1>
  <p id="priceList">
  <a href="know01.php"><span class="<?=$fileName==='know01.php' ? 'active':''?>">まめ知識</span></a>/
  <a href="know02.php"><span>葬儀心得</span></a>/
  <a href="know03.php"><span>社葬・団体葬</span></a>/
  <a href="know04.php"><span>お墓</span></a>/
  <a href="know05.php"><span>供物</span></a>/
  <a href="know06.php"><span>神棚・神具</span></a>/
  <a href="know07.php"><span>お仏壇</span></a>/
  <a href="know08.php"><span>位牌</span></a>/
  <a href="know09.php"><span>おもて書集</span></a>
</p>
<br/>
  <h2>まめ知識あれこれ</h2>
  <div id="priceBox">
  <br/>
<table width="700" border="0" cellpadding="3" cellspacing="3">
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="know02.php"><span>＞葬儀の心得</span></a></td>
    <td width="530" align="left">香典についての説明、数珠の使い方、会葬のマナー。</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="know03.php"><span>＞社葬・団体葬</span></a></td>
    <td width="530" align="left">社葬・団大葬とは何か、社葬が行われる時と前準備。</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140" valign="top"><a href="know04.php"><span>＞お墓</span></a></td>
    <td width="530" align="left">誰がいつ建てるのか、費用はどのくらい必要か。</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140" valign="top"><a href="know05.php"><span>＞供物</span></a></td>
    <td width="530" align="left">供物の一覧、価格。</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="know06.php"><span>＞神棚・神具</span></a></td>
    <td width="530" align="left">神棚や神具の飾り方、名称等の説明。</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="know07.php"><span>＞お仏壇</span></a></td>
    <td width="530" align="left">お仏壇について、ご本尊、お飾りと仏具、仏壇の材質と種類。</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="know08.php"><span>＞位牌</span></a></td>
    <td width="530" align="left">位牌の説明、位牌の起源。</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="know09.php"><span>＞おもて書き集</span></a></td>
    <td width="530" align="left">のし紙、のし袋のおもて書き集。</td>
  </tr>
</table>
</div>
<br/>
<br/>
<br/>

  
  

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
<?php include('../foot.php');?> 
