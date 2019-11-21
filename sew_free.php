<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Technology | October4";
require("include/head.php");
?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>
*{
    padding:0;
    margin:0;
}
body{
    overflow-x:hidden;
}
.header_img{
  background-image: url('img/technology/mix.jpg');
  position: relative;
  top:0;
  left:0;
  min-width: 100%; 
  min-height: 100vh;
  background-size: cover;
  }
  .row {
  margin: 15px;
}
.seam_sealing{
  display: grid;
  grid-gap: 30px;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-auto-rows: 150px;
  grid-auto-flow: row dense;
}
.seam_sealing img{
  height:100%;
  width:100%;
}
.item1{
  grid-column-start: 1;
		grid-column-end: 2;
		grid-row-start: 1;
		grid-row-end:3;
}
.item2{
  grid-column-start: 2;
		grid-column-end: 4;
		grid-row-start: 1;
		grid-row-end:3;
}
.item3{
  grid-column-start: 1;
		grid-column-end: 2;
		grid-row-start: 3;
		grid-row-end:4;
}
.item4{
  grid-column-start: 2;
		grid-column-end: 3;
		grid-row-start: 3;
		grid-row-end:4;
}
.item5{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 3;
		grid-row-end:5;
}

.item6{
  grid-column-start: 1;
		grid-column-end: 3;
		grid-row-start: 4;
		grid-row-end:5;
}
.item7{
  grid-column-start: 1;
		grid-column-end: 2;
		grid-row-start: 5;
		grid-row-end:7;
}

.item8{
  grid-column-start: 2;
		grid-column-end: 4;
		grid-row-start: 5;
		grid-row-end:7;
}

.item9{
  grid-column-start: 1;
		grid-column-end: 2;
		grid-row-start: 7;
		grid-row-end:9;
}
.item10{
  grid-column-start: 2;
		grid-column-end: 3;
		grid-row-start: 7;
		grid-row-end:9;
}
.item11{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 7;
		grid-row-end:9;
}
.item12{
  grid-column-start: 1;
		grid-column-end: 3;
		grid-row-start: 9;
		grid-row-end:11;
}
.item13{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 9;
		grid-row-end:11;
}

.item14{
  grid-column-start: 1;
		grid-column-end: 3;
		grid-row-start: 11;
		grid-row-end:14;
}
.item15{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 11;
		grid-row-end:14;
}
.item16{
  grid-column-start: 1;
		grid-column-end: 2;
		grid-row-start: 14;
		grid-row-end:16;
}
.item17{
  grid-column-start: 2;
		grid-column-end: 3;
		grid-row-start: 14;
		grid-row-end:16;
}
.item18{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 14;
		grid-row-end:16;
}


.bonding1{
  grid-column-start: 1;
		grid-column-end: 3;
		grid-row-start: 1;
		grid-row-end:3;
}
.bonding2{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 1;
		grid-row-end:3;
}
.bonding3{
  grid-column-start: 1;
		grid-column-end: 3;
		grid-row-start: 3;
		grid-row-end:6;
}
.bonding4{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 3;
		grid-row-end:6;
}
.bonding5{
  grid-column-start: 1;
		grid-column-end: 3;
		grid-row-start: 6;
		grid-row-end:8;
}

.bonding6{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 6;
		grid-row-end:8;
}

.bonding7{
  grid-column-start: 1;
		grid-column-end: 2;
		grid-row-start: 8;
		grid-row-end:10;
}
.bonding8{
  grid-column-start: 2;
		grid-column-end: 4;
		grid-row-start: 8;
		grid-row-end:10;
}
.bonding9{
  grid-column-start: 1;
		grid-column-end: 4;
		grid-row-start: 10;
		grid-row-end:12;
}
.bonding10{
  grid-column-start: 1;
		grid-column-end: 3;
		grid-row-start: 12;
		grid-row-end:15;
}
.bonding11{
  grid-column-start: 3;
		grid-column-end: 4;
		grid-row-start: 12;
		grid-row-end:15;
}

</style>
<body>
 <?php $page ='manufacturing'; require("include/navbar.php"); ?>
<main id="main">

<!--==========================
  Services Section
============================-->
<header class="section-header">
          <h3>Techinology</h3>
</header>

<div class="header_img">
</div>

<section id="garments">

<header class="section-header">
          <h3>Technical Outerwear</h3>
</header>
<div class="container-fluid">


    <div class="row">
    
    <a href="img/garments/top/1.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/1.jpg" class="img-fluid rounded">
    </a>

    
    <a href="img/garments/top/2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/2.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/3.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/4.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/5.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/5.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/6.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/6.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/7.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/7.jpg" class="img-fluid rounded">
    </a>
    
    <a href="img/garments/top/8.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/8.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/top/9.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/9.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/top/10.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/10.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/top/12.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/12.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/13.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/13.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/14.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/14.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/15.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/15.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/16.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/17.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/18.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/18.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/top/19.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/19.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/top/20.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/top/20.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/bottom/1.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/1.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/bottom/2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/2.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/bottom/3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/3.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/bottom/4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/4.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/bottom/5.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/5.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/bottom/6.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/6.jpg" class="img-fluid rounded">
    </a>

    <a href="img/garments/bottom/7.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/7.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/bottom/8.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/8.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/bottom/9.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/9.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/bottom/10.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/10.jpg" class="img-fluid rounded">
    </a>
    <a href="img/garments/bottom/11.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
      <img src="img/garments/bottom/11.jpg" class="img-fluid rounded">
    </a>

    
    </div>
</div>

<header class="section-header">
          <h3>Seam Sealing Process</h3>
</header>
    <div class="container-fluid">
        <div class="row seam_sealing">
        <div class='item1'>
        <a href="img/seam_sealing_process/1.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/1.jpg" class="img-fluid rounded">
        </a>
        </div>

       

        <div class='item2'>
        <a href="img/seam_sealing_process/2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/2.jpg" class="img-fluid rounded">
        </a>
        </div>
        
        <div class='item3'>
        <a href="img/seam_sealing_process/3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/3.jpg" class="img-fluid rounded">
        </a>
        </div>
       
        <div class='item'>
        <a href="img/seam_sealing_process/4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/4.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='item5'>
        <a href="img/seam_sealing_process/5.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/5.jpg" class="img-fluid rounded">
        </a>
        </div>
        

        <div class='item6'>
        <a href="img/seam_sealing_process/6.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/6.jpg" class="img-fluid rounded">
        </a>
        </div>

        <div class='item7'>
        <a href="img/seam_sealing_process/7.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/7.jpg" class="img-fluid rounded">
        </a>
        </div>

        <div class='item8'>
        <a href="img/seam_sealing_process/8.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/8.jpg" class="img-fluid rounded">
        </a>
        </div>
        
        <div class='item9'>
        <a href="img/seam_sealing_process/9.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/9.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='item10'>
        <a href="img/seam_sealing_process/10.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/10.jpg" class="img-fluid rounded">
        </a>
        </div>
        
        <div class='item11'>
        <a href="img/seam_sealing_process/11.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/11.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='item12'>
        <a href="img/seam_sealing_process/12.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/12.jpg" class="img-fluid rounded">
        </a>
        </div>

         <div class='item13'>
         <a href="img/seam_sealing_process/13.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/13.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='item14'>
        <a href="img/seam_sealing_process/18.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/18.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='item15'>
        <a href="img/seam_sealing_process/15.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/15.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='item16'>
        <a href="img/seam_sealing_process/16.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/16.jpg" class="img-fluid rounded">
        </a>
        </div>

        <div class='item17'>
        <a href="img/seam_sealing_process/17.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/17.jpg" class="img-fluid rounded">
        </a>
        </div>

        <div class='item18'>
        <a href="img/seam_sealing_process/14.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/seam_sealing_process/14.jpg" class="img-fluid rounded">
        </a>
        </div>

        </div>
    </div>

    <header class="section-header">
          <h3>Bonding Process</h3>
</header>
    <div class="container-fluid">
        <div class="row seam_sealing">
        <div class='bonding1'>
        <a href="img/bonding_process/1.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/1.jpg" class="img-fluid rounded">
        </a>
        </div>

       

        <div class='bonding2'>
        <a href="img/bonding_process/2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/2.jpg" class="img-fluid rounded">
        </a>
        </div>
        
        <div class='bonding3'>
        <a href="img/bonding_process/3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/3.jpg" class="img-fluid rounded">
        </a>
        </div>
       
        <div class='bonding4'>
        <a href="img/bonding_process/4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/4.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='bonding5'>
        <a href="img/bonding_process/5.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/5.jpg" class="img-fluid rounded">
        </a>
        </div>
        

        <div class='bonding6'>
        <a href="img/bonding_process/6.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/6.jpg" class="img-fluid rounded">
        </a>
        </div>

        <div class='bonding7'>
        <a href="img/bonding_process/7.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/7.jpg" class="img-fluid rounded">
        </a>
        </div>

        <div class='bonding8'>
        <a href="img/bonding_process/8.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/8.jpg" class="img-fluid rounded">
        </a>
        </div>
        
        <div class='bonding9'>
        <a href="img/bonding_process/9.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/9.jpg" class="img-fluid rounded">
        </a>
        </div>
        <div class='bonding10'>
        <a href="img/bonding_process/10.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/10.jpg" class="img-fluid rounded">
        </a>
        </div>
        
        <div class='bonding11'>
        <a href="img/bonding_process/11.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
            <img src="img/bonding_process/11.jpg" class="img-fluid rounded">
        </a>
        </div>

        </div>
    <bonding>

</section>




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
</main>
</body>
</html>