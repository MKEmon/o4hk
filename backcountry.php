<!DOCTYPE html>
<html lang="en">
<?php 
$title = "ABOUT US";
require("include/head.php");
?>
<style>
body{
	overflow-x:hidden;
}
.section-bg{
	background-image: url('img/portfolio/backcountry/backcountry_logo.jpg')!important;
	position:relative;
	background-size: 100% 100%;
  background-position: center;
}
</style>
<body>
	<?php $page='backcountry';require("include/navbar.php"); ?>
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
				
				<div class="product1 product"><a href=""><img src="img/portfolio/backcountry/backcountry_model.png"></a></div>
					
				<div class="product2 product"><a href=""><img src="img/portfolio/backcountry/backCountry.png"></a></div>
				<div class="product3 product"><a href=""><img src="img/portfolio/backcountry/bc_airesweatshirt.png"></a></div>
				<div class="product4 product"><a href=""><img src="img/portfolio/backcountry/seawool_flannel.png"></a></div>
			</div> -->

			<div class="row">
    
    <a href="img/portfolio/backcountry/backcountry_model.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/backcountry/backcountry_model.png" class="img-fluid rounded">
    </a>

    
    <a href="img/portfolio/backcountry/backCountry.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/backcountry/backCountry.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/backcountry/bc_airesweatshirt.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/backcountry/bc_airesweatshirt.png" class="img-fluid rounded">
    </a>
    <a href="img/portfolio/backcountry/seawool_flannel.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="img/portfolio/backcountry/seawool_flannel.png" class="img-fluid rounded">
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
