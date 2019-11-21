<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Services | October4";

require("include/head.php");
?>
</head>

<style>
	.btn{
		position: absolute;
    left: 20%;
    background: gray;
    padding: 20px;
    color:#fff !important;
    font-size: 24px;  
    margin-top: 10px;
  }
  .btn:hover{
    background: #3e8e41;
    color: white;
    transform: scale(1.2);
    transition: all .5s ease;

  }
  
  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.development{
  height: 100vh;
}
.space{
  height: 100vh;
}
.description{
  text-align: justify;
  padding:10px;
}
</style>

<body>
  <?php $page = "services";require("include/navbar.php"); ?>

<main id="main">

<!--==========================
  Services Section
============================-->
<section id="services">
  <div class="container">

    <header class="section-header wow fadeInUp">
      <h3>Services</h3>
      <p>Below are the services that Octobor4 hk ltd. provides customers including developing, manufacturing and others.</p>
    </header>

    <div class="row">

      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
        <h4 class="title"><a href="development.php">Development</a></h4>
		<p class="description">Developing your designs for a new collection involves 3 main components. When starting a collection, new designers need to consider their color story, design functionality, technical package, and garment patterns. Here’s the breakdown of each step in the design development process.</p>
      </div>
      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
        <h4 class="title"><a href="sourcing.php">Sourcing</a></h4>
		<p class="description">Fabric and trims are the raw material which needs to be outsourced. Sourcing is basically determining the most cost efficient vendor of materials, production, or finished goods at the specified quality and service level. It is closely associated and an important part of apparel merchandiser’s responsibility.</p>
      </div>
      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
        <h4 class="title"><a href="manufacturing.php">Manufacturing</a></h4>
		<p class="description">
      This process involves Product Design, Fabric Selection and Inspection, Patternmaking, Grading, Marking, Cutting, Sewing, Pressing or Folding, Finishing and Detailing, Dyeing and Washing, QC. We’ve been producing here at Bangladesh from 5 different factories, such as MHC Apparels Ltd. (Gazipur), Glorious Dress Ltd. (Savar), Sundry Wears Ltd, Oasis(Comilla EPZ)</p>
      </div>

    </div>

  </div>
</section>

<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>
</body>
</html>
