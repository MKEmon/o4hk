<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Technology | Seam Sealing";
require("include/head.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
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
  background-image: url('img/technology/mix2.jpg');
  position: relative;
  top:0;
  left:0;
  min-width: 100%; 
  min-height: 100vh;
  background-size: cover;
  background-position: center;
    background-repeat: no-repeat;
  }
  .photos img{
        margin:5px;
    }


    .item{
        position:relative;
    }
    .text{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        background:rgba(0,00,00,0.7);
        padding:20px;
        font-size:20px;
        width:70%;
        opacity:0;
    }
    .item:hover .text{
        opacity:1;
        transition:all 1s ease-in-out;
        
    }
    .text p{
        margin:0;
        text-align:center;
        text-transform:uppercase;
        color:white;
        letter-spacing:1px;
        font-weight:bold;
        
    }
</style>
<body>
 <?php $page ='manufacturing'; require("include/navbar.php"); ?>
<main id="main">

<!--==========================
  Services Section
============================-->
<header class="section-header">
          <h3>Technology</h3>
</header>

<div class="header_img">
</div>

<section id="garments">

<header class="section-header">
          <h3 style="padding:5px; margin-top:10px;">Technical Outerwear</h3>
</header>
<div class="container-fluid">

<div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/1.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/2.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/2.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/3.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/4.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/4.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/5.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/5.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/6.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/6.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/7.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/7.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/8.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/8.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/9.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/9.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/10.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/10.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/12.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/12.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/13.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/13.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/14.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/14.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/15.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/15.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/16.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/16.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/17.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/17.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/18.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/18.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/19.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/19.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/top/20.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/top/20.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/1.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/2.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/2.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/3.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/4.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/4.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/6.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/6.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/7.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/7.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/8.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/8.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/9.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/9.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/10.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/10.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/garments/bottom/11.jpg" data-lightbox="photos"><img class="img-fluid" src="img/garments/bottom/11.jpg"></a></div>

</div>
    
</div>

<header class="section-header">
          <h3 style="padding:5px; margin-top:10px;">Seam Sealing Technology</h3>
</header>
    <div class="container-fluid">
    <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/1.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/1.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/2.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/2.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/3.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/3.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/4.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/4.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/5.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/5.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/6.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/6.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/7.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/7.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/8.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/8.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/9.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/9.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/10.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/10.jpg"></a></div> -->
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/11.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/11.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/12.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/12.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/13.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/13.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/14.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/14.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/15.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/15.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/16.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/16.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/seam_sealing_process/17.jpg" data-lightbox="photos"><img class="img-fluid" src="img/seam_sealing_process/seam_resized/17.jpg"></a>
                <div class="text">
                        <p>laser cut with overlay tape</p>
                    </div>
                </div>
    </div>
    </div>

<footer id="footer">
  <?php require("include/footer.php"); ?>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</main>
</body>
</html>