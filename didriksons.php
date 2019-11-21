<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Partners | DIDRIKSONS";
require("include/head.php");
?>
</head>

<style>
.section-bg{
	background-image: url('img/portfolio/didriksons/didriksons_logo.jpg')!important;
	position:relative;
	background-size: 100% 100%;
  background-position: center;
}
</style>


<body>
	<?php $page='did';require("include/navbar.php"); ?>
	
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
    
    <a href="img/portfolio/didriksons/5.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/5.png" class="img-fluid rounded">
    </a>

    
    <a href="img/portfolio/didriksons/18.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/18.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/didriksons/15.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/15.png" class="img-fluid rounded">
    </a>
	<a href="img/portfolio/didriksons/4.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/4.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/didriksons/1.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/1.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/didriksons/2.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/2.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/didriksons/3.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/3.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/didriksons/6.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/didriksons/6.png" class="img-fluid rounded">
    </a>
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
