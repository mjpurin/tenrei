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
  <a href="know03.php"><span class="<?=$fileName==='know03.php' ? 'active':''?>">社葬・団体葬</span></a>/
  <a href="know04.php"><span>お墓</span></a>/
  <a href="know05.php"><span>供物</span></a>/
  <a href="know06.php"><span>神棚・神具</span></a>/
  <a href="know07.php"><span>お仏壇</span></a>/
  <a href="know08.php"><span>位牌</span></a>/
  <a href="know09.php"><span>おもて書集</span></a>
</p>
<br/>
  <h2>社葬・団体葬</h2>
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
    <td width="135"><p id="priceList"><strong>＜社葬・団体葬＞</strong><br/>
    <br/>
    <img src="img/0000I24.gif" width="107" height="94"/><br/>
    <br/>
    ※役員会等で段取りを決定します。</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">故人が社会的地位の高い場合、会社または団体の代表格の人が喪主となって、経費はそれらの会社、団体で負担して葬儀を行うことを、「社葬・団体葬」と言っております。葬儀の順序および進行については個人葬の場合と同じですが、その性質上、規模が大きくなります。参列者の範囲や数も増え、公的な性格を持つために葬儀の善し悪しが、執行者である主催者の評価につながる恐れがありますので、充分な配慮と綿密な計画実行が要求されます。</p></td>
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
    <td width="135"><p id="priceList"><strong>＜社葬の決定＞</strong><br/>
    <br/>
    <img src="img/0000I25.gif" width="91" height="101"/><br/>
    <br/>
    ※役員会等で段取りを決定します。</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">一般的に次のような場合に社葬が行われます。<br/>
    <br/>
    ①会長や社長が亡くなったとき。<br/>
    ②殉職者が出た場合。<br/>
    ③専務、常務、取締役が亡くなったとき。<br/>
    ④顧問、相談役が亡くなったとき。<br/>
    <br/>
    ①②のケースのほとんどの場合社葬になりますが、③④は取締役会の決定によって、社葬になるかどうか決められる場合が多いようです。    <br/>
    <br/>社葬の場合は、不慮の事故以外は危篤状態のときから、秘密にしかも速やかに準備をする必要があります。それだけにその準備には細心の注意をはらわなければなりません。安側礼の豊富な経験と実績を充分にご活用ください 。</p></td>
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
