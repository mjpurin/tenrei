<?php include('head.php');?>
<div id="subSliderBox">
<div id="subSlider">
         <div><a href=""><img alt="画像1" src="images/sub-slider/PR_hall.jpg" /></a></div>
         <div><a href=""><img alt="画像2" src="images/sub-slider/PR_hoken.jpg" /></a></div>
</div>
</div>
<main>

<script src="js/vendor/slick.min.js"></script>
<script>
   $(document).ready(function(){
  $('#subSlider').slick({
    autoplay:true,
    autoplaySpeed:5000,
  });
});

</script>
</main>
<?php include('foot.php');?> 
