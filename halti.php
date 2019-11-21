<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Partners | HALTI";
require("include/head.php");
?>
</head>

<style>

.section-bg{
	background-image: url('img/portfolio/halti/halti_logo.jpg')!important;
	position:relative;
	background-size: 100% 100%;
  background-position: center;
}
</style>

<body>
	<?php $page='halti';require("include/navbar.php"); ?>

<main id="main">
  <!--==========================
    Portfolio Section
  ============================-->
<section id="portfolio"  class="section-bg">
<div class="container">

      <header class="section-header">
        <h3 class="section-title" >Our Styles</h3>
			</header>
			
			<!-- <div class="gallery back">
				
				<div class="product1 product"><a href=""><img src="img/portfolio/halti/caimajacket.png"></a></div>
					
				<div class="product2 product"><a href=""><img src="img/portfolio/halti/ellaWomensjacket.png"></a></div>
				<div class="product3 product"><a href=""><img src="img/portfolio/halti/pallasMjacket.png" height="450px;" width="350px;" ></a></div>
				<div class="product3 product"><a href=""><img src="img/portfolio/halti/muurie_front.png" /></a></div>
			</div>  -->

<div class="row">
    
    <a href="img/portfolio/halti/1.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/1.png" class="img-fluid rounded">
    </a>

    
    <a href="img/portfolio/halti/2.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/2.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/halti/3.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/3.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/halti/4.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/4.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/halti/5.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/5.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/halti/6.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/6.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/halti/7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/7.png" class="img-fluid rounded">
    </a>
	<a href="img/portfolio/halti/8.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/8.png" class="img-fluid rounded">
    </a>
	<a href="img/portfolio/halti/9.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/halti/9.png" class="img-fluid rounded">
    </a>
</div>
</div>
  </section><!-- #portfolio -->

</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
    });
</script>
</body>
</html>
