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
  <a href="know07.php"><span class="<?=$fileName==='know07.php' ? 'active':''?>">お仏壇</span></a>/
  <a href="know08.php"><span>位牌</span></a>/
  <a href="know09.php"><span>おもて書集</span></a>
</p>
<br/>
  <h2>お仏壇について</h2>
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
    <td width="135"><p id="priceList"><strong>＜お仏壇＞</strong><br/>
    <br/>
    <img src="img/00000A4.gif" width="99" height="116"/></p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">仏壇は日本の長い鮭史と伝統の中で定着し、現在ではどこの家庭を見ても設けられています。限りない知恵と慈悲の仏様に形を通して遭うことのできる場所、それが仏壇であり、家庭の浄化の中心、精神生活のより所となる心の支えでもあります。また仏壇の構造は一様ではありませんが、仏壇は浄土の姿を表わすものですから、この仏壇に御位牌をおまつりすることは、亡くなられた霊が浄土に安らかに住まれる姿を示すものとされ、ご先祖の供養のためには欠かすことのできないものです。その他お仏壇に供養する物を分類すると、ご本尊、お飾りと仏具などが上げられます。<br/>
    <br/>
    ご先祖様をお祀りする仏壇はご本尊様の世界であるともいえます。仏壇におまいりするのはご先祖様に供養を捧げるとともに、ご本尊様の 世界に生きる祈りでもあります．仏壇の中心であるご本尊をお祀りすることは、お位牌をお祀りすること以上に大切なことでしょう。<br/>
    <br/>
    <img src="img/00000A6.gif" width="303" height="122"/><br/>
    <br/>
    <br/>
    宗教的な生活を営むために、仏壇にはご本尊のほか、お飾りと仏具が必要です。宗派によって多少の相違はありますが、ここでは一般的なものを紹介します。<br/>
    <br/>
    <img src="img/00000A7.gif" width="370" height="63"/><br/>
    </p>
    <br/>
    <br/>
    <table width="490" border="0" cellspacing="2" cellpadding="2">
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30">香</td>
                              <td width="5">＝</td>
                              <td width="280">良い匂いのする香を燻じ供えます。</td>
                              <td width="170">線香さし、各種香炉</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30">花</td>
                              <td width="5">＝</td>
                              <td width="280">蓮の花など生花が理想的です。</td>
                              <td width="170">花立て（花瓶）</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                              <td width="5">&nbsp;</td>
                              <td width="30" nowrap="nowrap">灯明</td>
                              <td width="5">＝</td>
                              <td width="280">蝋燭や油皿に火を灯します。</td>
                              <td width="170">蝋燭立て（燭台）</td>
                            </tr>
                            <tr>
                              <td width="5">&nbsp;</td>
                              <td width="30" nowrap="nowrap">浄水</td>
                              <td width="5">＝</td>
                              <td width="280">水または茶湯を供えます。</td>
                              <td width="170">茶湯器、茶台</td>
                            </tr>
                            <tr bgcolor="#FBF3EC">
                             <td width="5">&nbsp;</td>
                              <td width="30" nowrap="nowrap">食物</td>
                              <td width="5">＝</td>
                              <td width="280">ご飯や果物、お菓子を供えます。</td>
                              <td width="170">霊供膳、仏飯器、高坏</td>
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
