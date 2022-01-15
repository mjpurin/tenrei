<?php
session_start();
?>
<?php include('../headPrice.php');?>
<div id="subSliderBox">
<div id="subSlider">
         <div><a href=""><img alt="画像1" src="../images/sub-slider/PR_hall.jpg" /></a></div>
         <div><a href=""><img alt="画像2" src="../images/sub-slider/PR_hoken.jpg" /></a></div>
</div>
</div>
<main id="price">
  <h1>◇ 価格別葬儀祭壇　できるだけ費用を抑えたい</h1>
  <p>C-1　/　C-2　/　C-3　/　D-1　/　D-2　/　D-3（家族葬）/　一日葬　/　直葬　/価格一覧</p>
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

</script>
</main>
<?php include('../foot.php');?> 
