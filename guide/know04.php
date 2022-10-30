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
  <a href="know04.php"><span class="<?=$fileName==='know04.php' ? 'active':''?>">お墓</span></a>/
  <a href="know05.php"><span>供物</span></a>/
  <a href="know06.php"><span>神棚・神具</span></a>/
  <a href="know07.php"><span>お仏壇</span></a>/
  <a href="know08.php"><span>位牌</span></a>/
  <a href="know09.php"><span>おもて書集</span></a>
</p>
<br/>
  <h2>お墓について</h2>
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
    <td width="135"><p id="priceList"><strong>＜建立の計画＞</strong><br/>
    <br/>
    <img src="img/0000I29.GIF" width="93" height="91"/><br/>
    <br/>
    ※伝統的な和型<br/>
    <br/>
    <br/>
    <img src="img/0000I27.GIF" width="93" height="74"/><br/>
    <br/>
    ※最近、多く見受けられる洋型</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">◇誰が建てるのか？<br/>
    戦後まもなくの頃まで、お墓を建てるのは故人の長男でした。しかし法律が変わり、兄弟平等に相続権をもつ現在では、兄弟でお金を負担する例が多く見うけられます。亡き人の永眠の場所を造ってあげるのが建墓の精神ではないでしょうか。最近では生前にご自分で建てる人もいます。<br/>
    <br/>
    ◇いつ建てたらよいのか？<br/>
    お墓を建てる時期については、色々いわれ俗説もあるようですが、仏教的にみても建立の時期的制約は何もありません。むしろ少しでも早く建ててあげるのが故人への供養になります。ただ利便性を考えると、仏事を行う際に合わせて墓所の造営を行う方が多いようです。普通、一般の建墓時期としては、百ヶ日、あるいは毎月の命日（忌日）や一周忌までのお彼岸やお盆、三回忌の法要に合せることが多いようです。<br/>
    <br/>
    ◇費用はどの位必要か？<br/>
    いったん購入すれば孫の代まで使うことになるのですから、墓石の値段のほかに、立地条件や管理料など充分に検討して決める必要があります。皆さんがお墓をを建てられる場合、一番気になるのがこの費用の点だと思います。安心典礼では、今まで不明瞭だった墓石価格などを分かりやすくご説明いたしております。お気軽に何でもご相談ください。</p></td>
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
