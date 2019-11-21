<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "October4 ltd";
require("include/head.php");
?>
</head>
<style>
.gallery h2{
		font-family: 'PT Sans Narrow', sans-serif;
	}
.gallery{
	display: grid;
	grid-template-columns: repeat(2,1fr);
	text-align: center;
	position: relative;
	z-index: 100;
	grid-gap: 20px;
}
.section-title{
	position: relative;
	z-index: 100;
}

.section-bg{
	background-image: url('img/portfolio/maiersports/maier_logo.jpg')!important;
	position:relative;
	background-size: 100% 100%;
  background-position: center;
}
.section-bg::after{
	position: absolute;
	content: '';
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	background: rgba(240,240, 240, 0.9);
}

@media only screen and (max-width: 767px) and (min-width: 300px) {
	.gallery{
	display: grid;
	grid-template-columns: repeat(1,1fr);
	grid-gap: 20px;
	overflow-x: hidden;
	text-align: center;
}
.gallery img{
	height: 400px;
	width: 250px;
}}
@media only screen and (max-width: 1024px) and (min-width: 768px) {
	
	.gallery{
	display: grid;
	grid-template-columns: repeat(2,1fr);
	overflow-x: hidden;
}
 .gallery img{
	height: 300px;
	width: 300px;
}
}
</style>

<body>
	<?php $page='maier';require("include/navbar.php"); ?>

<main id="main">
  <!--==========================
    Portfolio Section
  ============================-->
<section id="portfolio"  class="section-bg">
<div class="container">

      <header class="section-header">
        <h3 class="section-title" >Our Styles</h3>
			</header>
			
			<div class="gallery back">
				
				<div class="product1 product"><a href=""><img src="img/portfolio/maiersports/he_hose.png"></a></div>
					
				<div class="product2 product"><a href=""><img src="img/portfolio/maiersports/he_polo.png"></a></div>
				<div class="product3 product"><a href=""><img src="img/portfolio/maiersports/the_polo.png"></a></div>
				<!-- <div class="product3 product"><a href=""><img src="img/portfolio/maiersports/alta_womens_jacket1.png" height="500px;" width="300px;"></a></div> -->
			</div>
</div>
  </section><!-- #portfolio -->

</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
</footer>
</body>
</html>
