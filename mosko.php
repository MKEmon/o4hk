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
	background-image: url('img/portfolio/moskomoto/mosko_moto_logo.jpg')!important;
	position:relative;
	background-size: 100% 100%;
  background-position: center;
}
</style>

<body>
	<?php $page='mosko';require("include/navbar.php"); ?>
	
<main id="main">
  <!--==========================
    Portfolio Section
  ============================-->
<section id="portfolio"  class="section-bg">
<div class="container">

      <header class="section-header">
        <h3 class="section-title" >Our Styles</h3>
			</header>

			<div class="row">
    
    <a href="img/portfolio/moskomoto/basilisk_jacket.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/moskomoto/basilisk_jacket.png" class="img-fluid rounded">
    </a>

    
    <a href="img/portfolio/moskomoto/basilisk_pant.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/moskomoto/basilisk_pant.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/moskomoto/delauge_jacket.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/moskomoto/delauge_jacket.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/moskomoto/delauge-pant.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/moskomoto/delauge-pant.png" class="img-fluid rounded">
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
