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
  <a href="s_1.php"><span>S-1</span></a>/
  <a href="s_2.php"><span>S-2</span></a>/
  <a href="s_3.php"><span>S-3</span></a>/
  <a href="a_1.php"><span>A-1</span></a>/
  <a href="a_2.php"><span>A-2</span></a>/
  <a href="a_3.php"><span>A-3</span></a>/
  <a href="b_1.php"><span>B-1</span></a>/
  <a href="b_2.php"><span>B-2</span></a>/
  <a href="b_3.php"><span>B-3</span></a>/
  <a href="list02.php"><span class="<?=$fileName==='list02.php' ? 'active':''?>">価格一覧</span></a>
</p>
<br/>
  <h2>社葬・団体葬など</h2>
  <div id="priceBox">
<table width="700" border="0" cellpadding="3" cellspacing="3">
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="s_1.php"><span>Ｓ－１</span></a></td>
    <td width="120" align="right">8,800,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">創作オリジナル花祭壇</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="s_2.php"><span>Ｓ－２</span></a></td>
    <td width="120" align="right">7,700,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">創作オリジナル花祭壇</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140" nowrap><a href="s_3.php"><span>Ｓ－３</span></a></td>
    <td width="120" align="right">6,600,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">創作オリジナル花祭壇</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="a_1.php"><span>Ａ－１</span></a></td>
    <td width="120" align="right">4,950,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">創作オリジナル花祭壇</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="a_2.php"><span>Ａ－２</span></a></td>
    <td width="120" align="right">4,400,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">創作オリジナル花祭壇</td>
  </tr>
    <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="a_3.php"><span>Ａ－３</span></a></td>
    <td width="120" align="right">3,300,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">創作オリジナル花祭壇</td>
  </tr>
</table>
</div>
<div id="normal"></div>
  <h2>立派にしてあげたい</h2>
  <div id="priceBox">
<table width="700" border="0" cellpadding="3" cellspacing="3">
    <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="b_1.php"><span>Ｂ－１</span></a></td>
    <td width="120" align="right">2,750,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">フラワー24尺祭壇</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td width="140"><a href="b_2.php"><span>Ｂ－２</span></a></td>
    <td width="120" align="right">2,200,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">フラワー21尺祭壇</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="30">&nbsp;</td>
    <td width="140"><a href="b_3.php"><span>Ｂ－３</span></a></td>
    <td width="120" align="right">1,980,000円</td>
    <td width="70">&nbsp;</td>
    <td width="340" align="left">フラワー18尺祭壇</td>
  </tr>
</table>
<br/>
<br/>
<br/>
<br/>
<p id="priceList"><a href="list01.php">出来るだけ費用を抑えたい／一般的な葬儀価格帯はこちら ＞</a></p>
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
