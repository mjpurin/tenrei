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
  <a href="know01.php"><span>まめ知識</span></a>/
  <a href="know02.php"><span>葬儀心得</span></a>/
  <a href="know03.php"><span>社葬・団体葬</span></a>/
  <a href="know04.php"><span>お墓</span></a>/
  <a href="know05.php"><span>供物</span></a>/
  <a href="know06.php"><span>神棚・神具</span></a>/
  <a href="know07.php"><span>お仏壇</span></a>/
  <a href="know08.php"><span class="<?=$fileName==='know08.php' ? 'active':''?>">位牌</span></a>/
  <a href="know09.php"><span>おもて書集</span></a>
</p>
<br/>
  <h2>位牌について</h2>
  <div id="priceBox">
  <br/>
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><p id="priceList"><strong>＜位牌＞</strong><br/>
    <br/>
    <img src="img/00000A9.GIF" width="48" height="210"/></p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">死者の霊を祀るために戒名を書いて、各家庭の仏壇や寺院の位碑壇に安置する木牌を位牌といい、霊牌とも呼んでいます。位牌の起源は禅僧が宋時代の中国からもたらし、我国では鎌倉時代よりさかんになりました。<br/>
    <br/>
    仏教では塔を建てることが亡くなられた方への最高の供養とされ、五重塔を代表とする建築物も「供養」の心が生んだ芸術品でした。このように供養の心が五重塔を作り、やがて位碑へと変化していきました。「位牌」は死者の「よりしろ」として、また 追善のための祈念の対象物として、信仰生活の中心的存在になっています。<br/>
    <br/>
    ※葬儀の時、白木作りの位牌（野位牌）を祀りますが、忌あけの四十九日以降は黒漆塗り・黒檀・紫檀などの本位牌に取り替えます。<br/>
    <br/>
    本位牌は安心典礼でも、お作り致しております。</p>
    </td>
    <td width="15">&nbsp;</td>
   </tr>
   <tr>
    <td colspan="5">&nbsp;</td>
   </tr>
</table>

</div>
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
