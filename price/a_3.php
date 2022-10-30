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
  <a href="s_1.php"><span>S-1</span></a>/
  <a href="s_2.php"><span>S-2</span></a>/
  <a href="s_3.php"><span>S-3</span></a>/
  <a href="a_1.php"><span>A-1</span></a>/
  <a href="a_2.php"><span>A-2</span></a>/
  <a href="a_3.php"><span class="<?=$fileName==='a_3.php' ? 'active':''?>">A-3</span></a>/
  <a href="b_1.php"><span>B-1</span></a>/
  <a href="b_2.php"><span>B-2</span></a>/
  <a href="b_3.php"><span>B-3</span></a>/
  <a href="list02.php"><span>価格一覧</span></a>
  </p>
  <h2>基本葬儀セット内容</h2>
  <div id="priceBox">
  <?php
  include('a_3table.php');
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
