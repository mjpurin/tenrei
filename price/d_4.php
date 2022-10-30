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
  <h1>◇ 価格別葬儀祭壇　できるだけ費用を抑えたい</h1>
  <p id="priceList">
  <a href="c_1.php"><span>C-1</span></a>/
  <a href="c_2.php"><span>C-2</span></a>/
  <a href="c_3.php"><span>C-3</span></a>/
  <a href="d_1.php"><span>D-1</span></a>/
  <a href="d_2.php"><span>D-2</span></a>/
  <a href="d_3.php"><span>D-3（家族葬）</span></a>/
  <a href="d_4.php"><span class="<?=$fileName==='d_4.php' ? 'active':''?>">一日葬</span></a>/
  <a href="jikiso.php"><span>直葬</span></a>/
  <a href="list01.php"><span>価格一覧</span></a>
  </p>
  <h2>基本葬儀セット内容</h2>
  <div id="priceBox">
  <?php
  include('d_4table.php');
  ?>

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
