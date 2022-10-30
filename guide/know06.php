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
  <a href="know06.php"><span class="<?=$fileName==='know06.php' ? 'active':''?>">神棚・神具</span></a>/
  <a href="know07.php"><span>お仏壇</span></a>/
  <a href="know08.php"><span>位牌</span></a>/
  <a href="know09.php"><span>おもて書集</span></a>
</p>
<br/>
  <h2>神棚・神具について</h2>
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
    <td width="135"><p id="priceList"><strong>＜まつり方＞</strong></p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList"><img src="img/00000A3.gif" width="130" height="142"/>　<img src="img/00000A2.gif" width="267" height="175"/></p>
    <br/>
    <br/>
    </p>
    <table width="405" border="0" cellspacing="2" cellpadding="2">
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">1</td>
                              <td width="370">注連縄（しめなわ）</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">2</b></td>
                               <td width="190">鏡<br/>
                            神棚は浄明のしるしで、神明の照鑑と、けがれのない誠と心をあらわします。</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">3</b></td>
                              <td width="190">榊<br/>
                            栄える木の意味で専ら神事に用い榊立てに挿し飾ります。（1本）</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">4</b></td>
                              <td width="190">燈篭<br/>
                            清浄の火をもって照らし清める意味です。</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">5</b></td>
                              <td width="190">お供え物<br/>
                              毎朝お供えするもの。<br/>
                              ※お米（ご洗米または御飯）<br/>
                              ※お塩<br/>
                              ※水の三品とお神酒を瓶子に入れて蓋をってお供えする。また、ふだんでも初物や到来物は三方や折敷に盛ってお供えします。</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">6</b></td>
                              <td width="190">かがり火立て</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">7</b></td>
                              <td width="190">神前幕</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">8</b></td>
                              <td width="190">三方</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">9</b></td>
                              <td width="190">水器</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">10</b></td>
                              <td width="190">御神酒徳利</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">11</b></td>
                              <td width="190">土器</td>
                            </tr>
                          </table>
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
