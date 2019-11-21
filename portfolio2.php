<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Portfolio | October4";

require("include/head.php");
?>
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/normalize.css">
<!-- <link rel="stylesheet" href="css/main.css"> -->
<script src="js/vendor/modernizr-2.7.1.min.js"></script>

</head>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.section-title{
    margin:10px !important;
    padding:0 !important;
}
h2{
    margin:0 !important;
    padding:0 !important;
}
#slide-1 .bcg{
    background-image:url('img/portfolio/clients/product1.jpg');
}

#slide-2 .bcg{
	background-image:url('img/portfolio/clients/product2.jpg');
} 
#slide-3 .bcg{
	background-image:url('img/portfolio/clients/product3.jpg');
}     
#slide-4 .bcg{
	background-image:url('img/portfolio/clients/product4.jpg');
}  
#slide-5 .bcg{
	background-image:url('img/portfolio/clients/product5.jpg');
}  
#slide-6 .bcg{
	background-image:url('img/portfolio/clients/product6.jpg');
} section {
    opacity: 1;
    height: 400px;
}
.bcg {
    background-size: cover;
    height: 100%;
    width: 98%;
    position:relative;
    margin-bottom:20px;
}
.bcg::after{
    position:absolute;
    content:'';
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.6);
}
/* this aligns the content 150px up from the middle */
.hsContainer {
    position:relative;
    z-index:100;

}
    .hsContent {
        position:absolute;
        top:200px;
        text-align: center;
        /* background:rgba(200,200,200,0.5); */
        padding:20px;
        overflow:hidden;
        font-weight:bold;
        background:rgba(240,240,240,0.2);
        border:1px solid rgba(240,240,240,0.2);
        width:100%;
    }
    .hsContent h2  {
        color: white;
        padding: 10px 5px;
        font-size: 18px;
        line-height: 23px;
        margin-bottom: 12px;
        font-weight:bold;
    }
    .hsContent p{
        color:white;
        font-size:12px;
    }
    
    @media only screen and (min-width: 768px) {
     
     body, html {
         height: auto;
     }
     h2{
    margin:0 !important;
    padding:0 !important;
}
     .bcg {
         background-position: center center;
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         height: 100%;
         width: 100%;
     }
     #slide-1 .bcg{
	background-image:url('img/portfolio/clients/product1.jpg');
}
#slide-1 .hsContent,#slide-3 .hsContent,#slide-4 .hsContent,#slide-6 .hsContent {
	bottom: 200px;
	top: auto;
}
#slide-2 .bcg{
	background-image:url('img/portfolio/clients/product2.jpg');
} 

#slide-2 .hsContent,#slide-5 .hsContent {
    top: auto;
}
#slide-2 .hsContent,#slide-5 .hsContent {
    position: fixed;
    top:60%;
}
 
#slide-3 .bcg{
	background-image:url('img/portfolio/clients/product3.jpg');
}     
#slide-4 .bcg{
	background-image:url('img/portfolio/clients/product4.jpg');
}  
#slide-5 .bcg{
	background-image:url('img/portfolio/clients/product5.jpg');
}  
#slide-6 .bcg{
	background-image:url('img/portfolio/clients/product6.jpg');
}  
     section {
         min-width: 768px;
         height: 100vh;
     }
     .hsContainer {
         width: 100%;
         height: 100%;
         overflow: hidden;
         position: relative;
         
     }
     .hsContent {
        max-width: 700px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform:translate(-50%,-50%);
        width:500px;
        padding:20px;
        font-weight:bold;
        background:rgba(240,240,240,0.2);
        border:1px solid rgba(240,240,240,0.2);
        border-top-right-radius: 100px;
        border-bottom-left-radius: 100px;
        /* border-top-left-radius:50px;
        border-bottom-right-radius: 50px; */
     }
     i{
         color:white;
       
     }
     .hsContent h2  {
        font-family: 'Staatliches', cursive;
		color: white;
		padding: 10px 5px;
		font-size: 35px;
		line-height: 38px;
        margin-bottom: 12px !important;
        text-align:center;
        letter-spacing:2px;
	}
	.hsContent p {
        font-family: 'PT Serif', serif;
        color: white;
        text-align:center;
        font-size:18px;
	}
	.hsContent a {
		color: #b2b2b2;
		text-decoration: none;
    }
    #slide-1 .hsContent,#slide-3 .hsContent,#slide-4 .hsContent,#slide-6 .hsContent {
	bottom: 200px;
	top: auto;
}
#slide-2 .hsContent,#slide-5 .hsContent {
    position: fixed;
    top:60%;
}
 }
</style>
<body>
  <?php $page = "portfolio";require("include/navbar.php"); ?>

<main id="main">

	  <header class="section-header">
        <h3 class="section-title">Our Partners</h3>
	  </header>
	  
	<section id="slide-1" class="homeSlide">
            <div class="bcg overlay"
            data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -400px;"
        data-anchor-target="#slide-1">
                <div class="hsContainer">
                    <div class="hsContent"
                    data-center="bottom: 200px; opacity: 1"
                data-top="opacity: 0"
                data-anchor-target="#slide-1 h2">
                        <h2>DIDRIKSONS</h2>
                        <p>We are working with DIDRIKSONS for 8 years</p>
                        <a href="https://www.didriksons.com" target="_blank"><i style="float:right;">More</i></a>
                    </div>
                </div>
            </div>
    </section>
    <section id="slide-2" class="homeSlide">
            <div class="bcg"
            data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;"
        data-bottom-top="background-position: 50% 100px;"
        data-anchor-target="#slide-2">
                <div class="hsContainer">
                    <div class="hsContent"
                    data-center="opacity: 1"
                data-center-top="opacity: 0"
                data--100-bottom="opacity: 0;"
                data-anchor-target="#slide-2">
                        
                        <h2>HALTI</h2>
                        <p>We are working with HALTI for 3 and half years</p>
                        <a href="https://halti.com" target="_blank"><i style="float:right;">More</i></a>
                    </div>
                </div>
            </div>
    </section>
    <section id="slide-3" class="homeSlide">
            <div class="bcg"
            data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -400px;"
        data-anchor-target="#slide-3">
                <div class="hsContainer">
                    <div class="hsContent"
                    data-center="bottom: 200px; opacity: 1"
                data-top="opacity: 0"
                data-anchor-target="#slide-3 h2">
                        <h2>MOSKO MOTO</h2>
                        <p>We are working with MOSKOMOTO for 3 years</p>
                        <a href="https://moskomoto.com" target="_blank"><i style="float:right;">More</i></a>
                    </div>
                </div>
            </div>
    </section>
    <section id="slide-4" class="homeSlide">
            <div class="bcg"
            data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -400px;"
        data-anchor-target="#slide-4">
                <div class="hsContainer">
                    <div class="hsContent"
                    data--50-bottom="opacity: 0;"
                data--200-bottom="opacity: 1;"
                data-center="opacity: 1"
                data-200-top="opacity: 0"
                data-anchor-target="#slide-4 h2">
                        <h2>TREW GEAR</h2>
                        <p>We are working with TREWGEAR for 8 years</p>
                        <a href="https://trewgear.com/" target="_blank"><i style="float:right;">More</i></a>
                    </div>
                </div>
            </div>
    </section>
    <section id="slide-5" class="homeSlide">
            <div class="bcg"
            data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;"
        data-bottom-top="background-position: 50% 100px;"
        data-anchor-target="#slide-5">
                <div class="hsContainer">
                    <div class="hsContent"
                    data-center="opacity: 1"
                data-center-top="opacity: 0"
                data--100-bottom="opacity: 0;"
                data-anchor-target="#slide-5">
                        <h2>BACK COUNTRY</h2>
                        <p>We are working with BACKCOUNTRY for 8 years</p>
                        <a href="https://www.backcountry.com/" target="_blank"><i style="float:right;">More</i></a>
                    </div>
                </div>
            </div>
    </section>
    <section id="slide-6" class="homeSlide">
            <div class="bcg"
            data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -400px;"
        data-anchor-target="#slide-6">
                <div class="hsContainer">
                    <div class="hsContent"
                    data-center="bottom: 200px; opacity: 1"
                data-top="opacity: 0"
                data-anchor-target="#slide-6 h2">
                        <h2>MAIER SPORTS</h2>
                        <p>We are working with MAIER SPORTS for 8 years</p>
                        <a href="https://maier-sports.com" target="_blank"><i style="float:right;">More</i></a>
                    </div>
                </div>
            </div>
    </section>
      
</main>




<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
		<script src="js/imagesloaded.js"></script>
		<script src="js/enquire.min.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/_main.js"></script>

        <script>

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
  
        //  s.refresh($('.homeSlide'));
  
     } else {
  
         // Init Skrollr
         var s = skrollr.init();
         s.destroy();
     }
  
     // Check for touch
     if(Modernizr.touch) {
  
         // Init Skrollr
         var s = skrollr.init();
         s.destroy();
     }
  
 }

 function initAdjustWindow() {
    return {
        match : function() {
            adjustWindow();
        },
        unmatch : function() {
            adjustWindow();
        }
    };
}
 
enquire.register("screen and (min-width : 768px)", initAdjustWindow(), false);
</script>
</body>
</html>
