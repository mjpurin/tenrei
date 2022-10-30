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
  <a href="know05.php"><span class="<?=$fileName==='know05.php' ? 'active':''?>">供物</span></a>/
  <a href="know06.php"><span>神棚・神具</span></a>/
  <a href="know07.php"><span>お仏壇</span></a>/
  <a href="know08.php"><span>位牌</span></a>/
  <a href="know09.php"><span>おもて書集</span></a>
</p>
<br/>
  <h2>供物について</h2>
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
    <td width="135"><p id="priceList"><strong>＜供物一覧＞</strong><br/>
    <br/>
    <img src="img/00000A1.GIF" width="74" height="90"/><br/>
    <br/>
    ※カゴはリースです<br/>
    <br/>
    <br/>
    ※花材は季節により異なります</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">お電話で、お気軽に御用命ください。</b><br/>
    [２４時間サービス] <br/>
    <br/>
    お電話で商品番号をお申し付け下さい。</p>
    <br/>
    <table width="405" border="0" cellspacing="2" cellpadding="2">
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">1</td>
                              <td width="190">生花（1基）</td>
                              <td width="180">16,500円</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">2</b></td>
                               <td width="190">生花（1基）</td>
                               <td width="180">22,000円</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">3</b></td>
                              <td width="190">花環（1本）</td>
                              <td width="180">11,000円</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">4</b></td>
                              <td width="190">花環（1本）</td>
                              <td width="180">16,500円</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">5</b></td>
                              <td width="190">果物籠（1基）</td>
                              <td width="180">16,500円</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">6</b></td>
                              <td width="190">缶詰籠（1基）</td>
                              <td width="180">16,500円</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">7</b></td>
                              <td width="190">燈籠（1対）</td>
                              <td width="180">16,500円</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">8</b></td>
                              <td width="190">茶盛（1基）</td>
                              <td width="180">33,000円</td>
                            </tr>
                          </table>
    <br/>
    <p id="priceList">※子供一同、親戚一同、兄弟一同等近親者の生花は1対で飾るのが一般的です。なお、故人で飾るときは1基でも結構です。<br/>
    <br/>
    ※上記の金額には消費税は含まれております。<br/>
    <br/>
    <br/>
    <img src="img/00000A25.gif" width="237" height="121" /></p>
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
