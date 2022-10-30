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
  <h1>◇ 知りたいことがひと目でわかる葬儀ガイド</h1>
  <p id="priceList">
  <a href="step01.php"><span>いざという時</span></a>/
  <a href="step02.php"><span class="<?=$fileName==='step02.php' ? 'active':''?>">葬儀の概要</span></a>/
  <a href="step03.php"><span>臨終</span></a>/
  <a href="step04.php"><span>届出</span></a>/
  <a href="step05.php"><span>手配</span></a>/
  <a href="step06.php"><span>通夜</span></a>/
  <a href="step07.php"><span>告別式～火葬</span></a>/
  <a href="step08.php"><span>法要</span></a>
</p>
<br/>
  <h2>葬儀の概要</h2>
  <div id="priceBox">
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><img src="img/GAI1.GIF" width="125" height="184" /></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle"><p id="priceList"><img src="img/illust1.gif" alt="" width="173" height="78"/></p>
    <br/>
    <p id="priceList">◇病院から安心典礼へお電話下さい。</p></td>
    <td width="15">&nbsp;</td>
   </tr>
   <tr>
    <td colspan="5">&nbsp;</td>
   </tr>
</table>
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><img src="img/GAI2.GIF" width="125" height="184" /></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle"><p id="priceList"><img src="img/ik2.gif" alt="" width="182" height="72"/></p>
    <br/>
    <p id="priceList">◇今後の段取りや、タイム・スケジュールをアドバイスさせていただきます。<br/>
    <br/>
                      ◇祭壇、受付、テントなどを設営いたします。</p></td>
    <td width="15">&nbsp;</td>
   </tr>
   <tr>
    <td colspan="5">&nbsp;</td>
   </tr>
</table>
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><img src="img/GAI3.GIF" width="125" height="184" /></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle"><p id="priceList"><img src="img/ilk2.gif" alt="" width="254" height="137"/></p></td>
    <td width="15">&nbsp;</td>
   </tr>
   <tr>
    <td colspan="5">&nbsp;</td>
   </tr>
</table>
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><img src="img/GAI4.GIF" width="125" height="184" /></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle"><p id="priceList"><img src="img/ilk3.gif" alt="" width="247" height="74"/></p>
    <br/>
    <p id="priceList">◇御遺骨を祭壇(あと飾り祭壇）に飾ります。<br/>
                      ◇翌日、ご近所へあいさつ回りをします。<br/>
                      ◇通夜から葬儀までお世話になった方たちへの感謝を、酒肴でその労をねぎらいます。</p></td>
    <td width="30">&nbsp;</td>
   </tr>
   <tr>
    <td colspan="5">&nbsp;</td>
   </tr>
</table>
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><img src="img/GAI5.GIF" width="125" height="184" /></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <br/>
    <p id="priceList">◇四十九日が過ぎ忌明けになると、家に安置しておいた遺骨は埋葬、又は納骨します。<br/>
    <br/>
                      上記に示すものは、現在関東首都圏で一般に行われている葬法の一例です。葬儀の規模、形式等により異なります。</p></td>
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
