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
  <a href="step04.php"><span>届出</span></a>/
  <a href="step05.php"><span>手配</span></a>/
  <a href="step06.php"><span class="<?=$fileName==='step06.php' ? 'active':''?>">通夜</span></a>/
  <a href="step07.php"><span>告別式～火葬</span></a>/
  <a href="step08.php"><span>法要</span></a>
</p>
<br/>
  <h2>通夜</h2>
  <div id="priceBox">
<br/>
<br/>
<table width="700" border="0" style="border:1px solid #000;" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="135"><p id="priceList"><strong>＜喪服＞</strong><br/>
    <br/>
    <img src="img/0000I10.GIF" alt="" width="119" height="218"/><br/>
    <br/>
    ※お寺への連絡は早めに・・・。</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">通夜は主に近親者や故人と特に親しい関係に あった方々が集まり、故人の冥福を祈り別れを惜しむことです。本来は、遺体を汚れたものとして人目の届かぬ所に移した上、近親者や友人が悪霊や野獣、風水害などで遺体が侵されぬように夜を通じて守ったことに始まったとされています。<br/>
    <br/>
    神式では「みたま移し」、キリスト教では「前夜祭と呼び、地域の習俗に応じても形式は著しく異なります。遺族から通夜の時刻を知らされた場合、出席を請われたということですから、万障繰り合わせて出席します。また死亡の知らせと告別式の日時のみが告げられた場合には告別式への参列だけにとどめるのが良いでしょう。 <br/>
    <br/>
    女性の場合は黒無地5つ紋の和服か、光沢のない 黒無地のワンピース、ツーピース、アンサンブル。男性は5つ紋付きの黒羽二重が和装の正式な喪服です。洋装ではモーニングが正式ですが、モーニングは昼間の正装なので、通夜にはブラック・スーツかダーク・スーツでかまいません。 急に不幸を聞いて駆けつける場合や、会社から直接行く場合は平服でもかまいません。自宅から行ける場合は黒の喪服を着て行った方がよいでしょう。女性の場合はアクセサリーを外し、マニキュアをとり、薄化粧に直します。</p></td>
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
    <td width="135"><p id="priceList"><strong>＜通夜の挨拶＞</strong><br/>
    <br/><img src="img/0000I11.GIF" alt="" width="97" height="118"/><br/>
    <br/>
    ※喪主は故人と一番繋がりの深い人を選びます。</p></td>
    <td width="30">&nbsp;</td>
    <td width="490" valign="middle">
    <p id="priceList">①玄関など、出入口付近の照明については、特に込み合うことが予想されます。なるべく明るくし弔問客に失礼とならぬよう配慮します。<br/>
    <br/>
    ②どなたにも満遍なく挨拶できるよう案内係を配置して、喪主は遺体の側近からあまり動かぬよう配慮します（特に、地域によっては喪主が玄関まで送り出すことに対して、忌み嫌われる場合があるので注意します）。<br/>
    <br/>
    ③喪主の主務は弔問の拝受です。従って弔問の受け易い（遺体の側近で弔問客の出入りの分かり易い）位置に着座します。<br/>
    <br/>
    ④挨拶の言葉は「ありがとうございます」を「恐れ入ります」に置き換えた言葉にすれば良いでしょう。香典、弔辞拝受に際して「ありがとうございます」では不適当でしょう。<br/>
    <br/>
    ⑤通夜の弔問客には租供養として、お茶や砂糖のギフトセットを渡しています。この返礼品のことを「通夜返し」と言っています。<br/>
    <br/>
    ⑥通夜の開会と閉会については、午後6時か、7時頃から僧侶の読経をもって始まり、法話で終わります。喪主や親族の代表は頃合をみて、通夜を終わらせる旨を告げるようにします。喪主は感謝の挨拶を簡単に述べますが、やはり客を玄関に送ることは慎みます。</p></td>
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
