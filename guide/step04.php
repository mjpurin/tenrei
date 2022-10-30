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
  <a href="step02.php"><span>葬儀の概要</span></a>/
  <a href="step03.php"><span>臨終</span></a>/
  <a href="step04.php"><span class="<?=$fileName==='step04.php' ? 'active':''?>">届出</span></a>/
  <a href="step05.php"><span>手配</span></a>/
  <a href="step06.php"><span>通夜</span></a>/
  <a href="step07.php"><span>告別式～火葬</span></a>/
  <a href="step08.php"><span>法要</span></a>
</p>
<br/>
  <h2>役所への届出</h2>
  <div id="priceBox">
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><p id="priceList"><strong>＜死亡届＞</strong><br/>
    <br/>
    <img src="img/0000I4.GIF" alt="" width="105" height="131" /><br/>
    <br/>
    ※死亡診断書は臨終に立ち会った医師が作成します。</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">死亡診断書は医師が作成します（葬家の記入欄もあります）。これを持って役所（市区町村役場）に死亡届をいたします。不自然死（一般の医師が死亡診断書を作成できないとき）の場合は、監察医の検死を受け、死亡検案書に記入押印してもらい、死亡届を出します。<br/>
    <br/>
    ◇死亡届く死亡診断書）の提出先<br/>
    居住地、本籍地、死亡地のいずれか一カ所の 市区町村役場へ提出しなければなりません。届出用紙（死亡診断書）を一通だけ提出すれば、関係各所へ転送され、戸籍が抹消されます。市区町村役場への死亡届は、ご遺族もしくは自治会の方が行うことが多いようです。<br/>
    <br/>
    ◇7日以内に届け出る<br/>
    法律的には死亡した日から7日以内に死亡届 を出せばよいが、実際は葬儀に間に合うように、死亡の日か、翌日には届け出ます。<br/>
    <br/>
    死亡届を提出すれは、火葬許可証が発行され ます。これを火葬場へ提出すると、管理者が所定の記入をして、これが埋葬許可証になります。 埋葬許可証は、墓地での納骨に必要なものです。この書類は再交付されませんので、納骨まで大切に保管してくだきい。</p></td>
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
    <td width="135"><p id="priceList"><strong>＜事故死の時＞</strong><br/>
    <br/><img src="img/0000I5.GIF" alt="" width="89" height="203" /><br/>
    <br/>
    ※密葬とは近親者だけでとり行なう葬儀のこと。</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">事故死の場合は警察に連絡し、事情により警察医の検視が行われた場合は死体検察書が発行されますので、これを添えて死亡届を出します。<br/>
    <br/>
    ◇事故死で遺体未発見の場合<br/>
    法律では3年後死亡が認められます。<br/>
    <br/>
    ◇生死不明の場合<br/>
    法律上、7年後に死亡が認められます。<br/>
    <br/>
    ◇密葬と本葬<br/>
    密葬とは近親者だけで火葬までの儀式を済ますことであり、日をあらためて対外的にもう一度葬儀を行うことを本葬と言っています。密葬が営まれるケースは次のような理由が多いようです。<br/>
    ①故人が社会的な地位の高い人で、公葬を執り行う場合。<br/>
    ②死亡した時が年末年始で、葬儀が正月松の内 にかかる場合。<br/>
    ③海や山の遭難で現地葬にしたり、外国での客死のような場合。</p></td>
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
