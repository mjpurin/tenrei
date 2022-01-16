<?php
session_start();
?>
<?php include('../head.php');?>
<div id="subSliderBox">
<div id="subSlider">
         <div><a href=""><img alt="画像1" src="../images/sub-slider/PR_hall.jpg" /></a></div>
         <div><a href=""><img alt="画像2" src="../images/sub-slider/PR_hoken.jpg" /></a></div>
</div>
</div>
<main id="price">
  <h1>◇ 価格別葬儀祭壇　できるだけ費用を抑えたい</h1>
  <p id="priceList">
  <a href=""><span>C-1</span></a>/
  <a href=""><span>C-2</span></a>/
  <a href=""><span>C-3</span></a>/
  <a href=""><span>D-1</span></a>/
  <a href=""><span>D-2</span></a>/
  <a href="d_3.php"><span class="<?=$fileName==='d_3.php' ? 'active':''?>">D-3（家族葬）</span></a>/
  <a href=""><span>一日葬</span></a>/
  <a href=""><span>直葬</span></a>/
  <a href=""><span>価格一覧</span></a>
  </p>
  <h2>基本葬儀セット内容</h2>
  <div id="priceBox">
  <?php
  include('d_3table.php');
  ?>

  </div>

<script src="../js/vendor/slick.min.js"></script>
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
