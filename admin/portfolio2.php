<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "October4 ltd";

require("include/head.php");
?>
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">

</head>

<style>


.section-bg{
    background:white !important;    
}
.parallax-window {
    min-height: 800px;
    background: transparent;
    position:relative;
}
.text{
    position:fixed;
    opacity:0;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    z-index:1000;
    background:rgba(240,240,240,0.8);
    padding:20px;
    border:1px solid transparent;
    border-radius:20px;
    
}
.parallax-window{
  width: 100%;
}
.text h2{
    font-family: 'Staatliches', cursive;
    color:rgb(34,139,34);

}
.text p{
    color:rgb(34,139,34);
    font-size: 20px;
    font-family: 'PT Serif', serif;

}
@media only screen and (max-width:749px) {
  .parallax-window {
    background-attachment: inherit;
  }
}
</style>
<body>
  <?php $page = "portfolio";require("include/navbar.php"); ?>
  
<main id="main">
  <!--==========================
    Portfolio Section
  ============================-->
  <section id="portfolio"  class="section-bg">


      <header class="section-header">
        <h3 class="section-title">Our Partners</h3>
      </header>

<div class="parallax-window" data-parallax="scroll" data-image-src="img/portfolio/didriksons/product3.jpg" data-z-index="100">
    <div class="text" data-0="opacity: 1;" 
				data-600="opacity: 0;">
        <h2 class="text-center">DIDRIKSONS</h2>
        <p>We are working with DIDRIKSONS for 8 years</p>
        <a href="https://www.didriksons.com" target="_blank"><i style="float:right;">More</i></a>
    </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="img/portfolio/trewgear/product3.jpg" data-z-index="100">
    <div class="text" data-800="opacity:0" data-1000="opacity:1" data-1400="opacity:0">
        <h2 class="text-center">TREWGEAR</h2>
        <p>We are working with TREWGEAR for 8 years</p>
        <a href="https://trewgear.com/" target="_blank"><i style="float:right;">More</i></a>
    </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="img/portfolio/halti/product3.jpg" data-z-index="100">
    <div class="text" data-1600="opacity:0" data-1800="opacity:1" data-2200="opacity:0">
        <h2 class="text-center">Halti</h2>
        <p>We are working with HALTI for about 3 and half years</p>
        <a href="https://halti.com" target="_blank"><i style="float:right;">More</i></a>
    </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="img/portfolio/moskomoto/product3.jpg" data-z-index="100">
    <div class="text" data-2400="opacity:0" data-2600="opacity:1" data-3000="opacity:0">
        <h2 class="text-center">MOSKOMOTO</h2>
        <p>We are working with MOSKOMOTO for 3 years</p>
        <a href="https://moskomoto.com" target="_blank"><i style="float:right;">More</i></a>
    </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="img/portfolio/backcountry/product3.jpg" data-z-index="100">
    <div class="text" data-3200="opacity:0" data-3400="opacity:1" data-3800="opacity:0">
        <h2 class="text-center">BACKCOUNTRY</h2>
        <p>We are working with BACKCOUNTRY for 8 years</p>
        <a href="https://www.backcountry.com/" target="_blank"><i style="float:right;">More</i></a>
    </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="img/portfolio/maiersports/product3.jpg" data-z-index="100">
    <div class="text" data-4000="opacity:0" data-4200="opacity:1" data-4500="opacity:0">
        <h2 class="text-center">MAIER SPORTS</h2>
        <p>We are working with MAIER SPORTS for 8 years</p>
        <a href="https://maier-sports.com" target="_blank"><i style="float:right;">More</i></a>
    </div>
</div>

<!-- #portfolio -->
    </section>
</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="js/parallax.js"></script>
 <script src="js/enquire.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>

 <script>
     $(function(){
		skrollr.init({
		forceHeight: false
    });
    function adjustWindow(){
     
     // Get window size
     winH = $window.height();
     winW = $window.width();
      
     // Keep minimum height 550
     if(winH <= 550) {
         winH = 550;
     }
      
     // Init Skrollr for 768 and up
     if( winW >= 768) {
  
         // Init Skrollr
         var s = skrollr.init({
             forceHeight: false
         });
  
         // Resize our slides
         $slide.height(winH);
  
         s.refresh($('.homeSlide'));
  
     } else {
  
         // Init Skrollr
         var s = skrollr.init();
         s.destroy();
     }



});


 </script>
</body>
</html>
