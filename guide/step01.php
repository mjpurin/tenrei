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
  <a href="step01.php"><span class="<?=$fileName==='step01.php' ? 'active':''?>">いざという時</span></a>/
  <a href="step02.php"><span>葬儀の概要</span></a>/
  <a href="step03.php"><span>臨終</span></a>/
  <a href="step04.php"><span>届出</span></a>/
  <a href="step05.php"><span>手配</span></a>/
  <a href="step06.php"><span>通夜</span></a>/
  <a href="step07.php"><span>告別式～火葬</span></a>/
  <a href="step08.php"><span>法要</span></a>
</p>
<br/>
  <h2>いざという時に慌てないために</h2>
  <div id="priceBox">
  <br/>
<table width="700" border="0" cellpadding="3" cellspacing="3">
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="step02.php"><span>＞葬儀の概要</span></a></td>
    <td width="530" align="left">死亡から葬儀法要までの概要を順を追って説明します。</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="step03.php"><span>＞臨終</span></a></td>
    <td width="530" align="left">末期の水、死装束、遺体の安置についての説明。</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140" valign="top"><a href="step04.php"><span>＞届出</span></a></td>
    <td width="530" align="left">死亡診断書、死亡届の手続きの仕方、火葬許可証、埋葬許可証の説明、事故死の場合の手続き。</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140" valign="top"><a href="step05.php"><span>＞手配</span></a></td>
    <td width="530" align="left">葬儀の日取り、喪主の決定、形式規模の決定、世話役への依頼死亡広告から初七日の手続き。</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="step06.php"><span>＞通夜</span></a></td>
    <td width="530" align="left">喪服についての説明、通夜の接待や挨拶の仕方。</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="step07.php"><span>＞告別式～火葬</span></a></td>
    <td width="530" align="left">告別式の進行、親族の挨拶、出棺、火葬から収骨までの説明。</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="step08.php"><span>＞法要</span></a></td>
    <td width="530" align="left">法要の準備、新盆、年忌法要の説明。</td>
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
