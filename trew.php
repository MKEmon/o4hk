<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "October4 ltd";
require("include/head.php");
?>
</head>

<style>
.section-bg{
	background-image: url('img/portfolio/trewgear/trew_bg.jpg')!important;
	position:relative;
	background-size: 100% 100%;
  background-position: center;
}
</style>

<body>
	<?php $page='trew';require("include/navbar.php"); ?>
	
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
				
				<div class="product1 product"><a href="powfunk"><img src="img/portfolio/trewgear/powfunk.png"></a></div>
					
				<div class="product2 product"><a href=""><img src="img/portfolio/trewgear/capow_jacket.png" height="500px;" width="350px;"></a></div>
				<div class="product3 product"><a href=""><img src="img/portfolio/trewgear/cosmic_cascade.png" ></a></div>
				<div class="product3 product"><a href=""><img src="img/portfolio/trewgear/capow_bib.png"></a></div>
			</div> -->

<div class="row">
    
    <a href="img/portfolio/trewgear/1.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/1.png" class="img-fluid rounded">
    </a>

    
    <a href="img/portfolio/trewgear/2.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/2.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/trewgear/3.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/3.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/trewgear/4.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/4.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/trewgear/5.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/5.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/trewgear/6.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/6.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/trewgear/7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/7.png" class="img-fluid rounded">
    </a>
	<a href="img/portfolio/trewgear/8.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/8.png" class="img-fluid rounded">
    </a>
	<a href="img/portfolio/trewgear/9.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/trewgear/9.png" class="img-fluid rounded">
    </a>
</div>
</div>
  </section><!-- #portfolio -->

</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>

 <script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
    });
</script>

</body>
</html>
