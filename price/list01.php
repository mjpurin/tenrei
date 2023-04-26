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
  <h1>◇ 価格別葬儀祭壇　価格一覧（基本葬儀セット内容）</h1>
  <p id="priceList">
  <a href="c_1.php"><span>C-1</span></a>/
  <a href="c_2.php"><span>C-2</span></a>/
  <a href="c_3.php"><span>C-3</span></a>/
  <a href="d_1.php"><span>D-1</span></a>/
  <a href="d_2.php"><span>D-2</span></a>/
  <a href="d_3.php"><span>D-3（きずな葬）</span></a>/
  <a href="d_4.php"><span>つばさ葬</span></a>/
  <a href="jikiso.php"><span>火葬</span></a>/
  <a href="list01.php"><span class="<?=$fileName==='list01.php' ? 'active':''?>">価格一覧</span></a>
</p>
<br/>
  <h2>出来るだけ費用を抑えたい</h2>
  <div id="priceBox">
<table width="700" border="0" cellpadding="3" cellspacing="3">
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="jikiso.php"><span>＞ 火　葬</span></a></td>
    <td width="120" align="right">275,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">祭壇無し 火葬のみ</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="d_4.php"><span>＞ つばさ葬</span></a></td>
    <td width="120" align="right">363,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">フラワー6尺祭壇 (告別式のみ)</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140" nowrap><a href="d_3.php"><span>＞ Ⅾ－３（きずな葬）</span></a></td>
    <td width="120" align="right">429,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">白木6尺もしくはフラワー6尺祭壇</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="d_2.php"><span>＞ Ⅾ－２</span></a></td>
    <td width="120" align="right">660,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">白木6尺もしくはフラワー8尺祭壇</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="d_1.php"><span>＞ Ⅾ－１</span></a></td>
    <td width="120" align="right">880,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">白木6尺もしくはフラワー10尺祭壇</td>
  </tr>
</table>
</div>
<div id="normal"></div>
  <h2>一般的な葬儀価格帯</h2>
  <div id="priceBox">
<table width="700" border="0" cellpadding="3" cellspacing="3">
    <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="c_3.php"><span>＞ Ⅽ－３</span></a></td>
    <td width="120" align="right">1,100,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">白木6尺もしくはフラワー6尺祭壇</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="c_2.php"><span>＞ Ⅽ－２</span></a></td>
    <td width="120" align="right">1,430,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">白木6尺もしくはフラワー8尺祭壇</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="c_1.php"><span>＞ Ⅽ－１</span></a></td>
    <td width="120" align="right">1,650,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">白木6尺もしくはフラワー10尺祭壇</td>
  </tr>
</table>
<br/>
<br/>
<br/>
<br/>
<p id="priceList"><a href="list02.php">立派にしてあげたい／社葬・団体葬などはこちら ＞</a></p>
</div>

  <h2>その他宗教、供花のご案内</h2>
  <div id="priceBox">
<table width="700" border="0" cellpadding="3" cellspacing="3">
    <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="670"><a href="#" onclick="MM_openBrWindow('christ.html','zoom','scrollbars=no,resizable=yes')">＞ キリスト教</a></td>

  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="670"><a href="#" onclick="MM_openBrWindow('shinto.html','zoom','scrollbars=no,resizable=yes')">＞ 神道</a></td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="670"><a href="#" onclick="MM_openBrWindow('flower.html','zoom','scrollbars=no,resizable=yes')">＞ 供花</a></td>
  </tr>
</table>
<br/>
<br/>
<br/>
<p id="priceList"><a href="javascript:void(0)" onclick="MM_openBrWindow('jinkenhi.html','jinken','scrollbars=yes,width=700,height=700')"><font color="#CC0000">◇人件費内訳表はこちら ＞</font></a></p>
<br/>
<br/>
<p id="priceList"><font color="#CC0000">◇特注品内容（PDFファイル）</font></p>
　<ul>
    <li><a href="lease001_2014.pdf" target="_blank">＞ リース単価表</a> (203kb)</li>
    <li><a href="lease002_2014.pdf" target="_blank">＞ 彫刻骨容器価格表</a> (127kb)</li>
    <li><a href="lease003_2014.pdf" target="_blank">＞ 提灯・水引幕価格表</a> (114kb)</li>
    <li><a href="lease004_2014.pdf" target="_blank">＞ 立看板価格表</a> (116kb)</li>
  </ul>
</div>
  
  

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
