<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "BASILISK";
require("include/head.php");
?>
</head>
<style>
 .parts_of_product img{
        height: 100px;
        width: 100px;
    }
    .main_image img{
        height: 600px;
        width: 500px;
    }
    ul.parts_of_product{
        float: left;
        /* margin: 100px; */
        margin-top: 100px;
        margin-right: 20px;
    }
    ul.parts_of_product li{
        list-style-type: none;
    }
    .parts_of_product img{
        border-bottom: 1px solid black;
        opacity: 0.6;
        
    }
    .product_image{
        justify-self: end;
    }
    .main_image{
        float: left;
    }
    #product_details{
        display: grid;
        grid-template-columns: 3fr 2fr;
    }
    .product_desc li p{
        color: #4b4b4e;
        font-family: 'Hind', sans-serif;
    }
    .product_desc{
        align-self: center;
    }
.left{
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-gap: 20px;
        margin-top: 50px;
        position: relative;
    }
.right{
    display: grid;
    grid-template-columns: 1fr 2fr;
    grid-gap: 20px;
    margin:50px; 
    position: relative;
}
.left .image, .right .image{
        justify-self: center;
        margin-left: 30px;
        margin-right: 30px;
    }
.left .text,.right .text{
        align-self: center;
        color: #4b4b4e;
        font-size: 18px;
        line-height: 1.4;
        justify-self: center;
        font-family: 'Cardo', serif;
    }
    .left::before{
        content: '';
        position: absolute;
        height: 15%;
        width: 2px;
        left: 10px;
        top: -10px;
        background-color: #4b4b4e;

    }
    .left::after{
        content: '';
        position: absolute;
        height: 2px;
        width: 15%;
        left: 10px;
        top: -10px;
        background-color: #4b4b4e;
}
.left .text::before{
        content: '';
        position: absolute;
        height: 2px;
        width: 15%;
        right: 5px;
        bottom: 0;
        background-color: #4b4b4e;
}
.left .text::after{
        content: '';
        position: absolute;
        height: 15%;
        width: 2px;
        right: 5px;
        bottom: 0;
        background-color: #4b4b4e;
}
.right::before{
        content: '';
        position: absolute;
        height: 15%;
        width: 2px;
        left: 0;
        top: 0;
        background-color: #4b4b4e;

    }
    .right::after{
        content: '';
        position: absolute;
        height: 2px;
        width: 15%;
        left: 0;
        top: 0;
        background-color: #4b4b4e;
} 
.right .text::before{
        content: '';
        position: absolute;
        height: 2px;
        width: 15%;
        right: 0;
        bottom: -10px;
        background-color: #4b4b4e;
}
.right .text::after{
        content: '';
        position: absolute;
        height: 15%;
        width: 2px;
        right: 0;
        bottom: -10px;
        background-color: #4b4b4e;
}
.super_fabric{
    background-image: url('img/portfolio/moskomoto/basilisk/super_fabric.jpg');
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
}
.gallery,.cohesive{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 10px;
    justify-content: center;
    padding: 20px;
}
.powder_skirt{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 10px;
    justify-content: center;
    padding: 20px;
}
.zipper,.sewing,.button{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 10px;
    justify-content: center;
    padding: 20px;
}
.image{
    justify-self: center;
}
.image h3{
    text-align: center;
    font-size: 14px;
    max-width: 400px;
    padding: 10px;
}
.image img{
    height: 400px;
    width: 30vw;
}
</style>
<body>
      <?php require("include/navbar.php"); ?>
<main id="main">

  <!--==========================
    Portfolio Section
  ============================-->
  <section id="portfolio"  class="section-bg">


        <header class="section-header">
          <h3 class="section-title">Product Details</h3>
        </header>

        <div id="product_details">
            <div class="product_image">
               <ul class="parts_of_product thumbnails">
                        <li>
                            <a href="img/portfolio/moskomoto/basilisk_pant.jpg" data-standard="img/portfolio/moskomoto/basilisk_pant.jpg">
                            <img src="img/portfolio/moskomoto/basilisk_pant.jpg" alt="">
                        </li>
                        <li>
                            <a href="img/portfolio/moskomoto/basilisk_pant.jpg" data-standard="img/portfolio/moskomoto/basilisk_pant.jpg">
                            <img src="img/portfolio/moskomoto/basilisk_pant.jpg" alt="">
                        </li>
                        <li>
                            <a href="img/portfolio/moskomoto/basilisk_pant.jpg" data-standard="img/portfolio/moskomoto/basilisk_pant.jpg">
                            <img src="img/portfolio/moskomoto/basilisk_pant.jpg" alt="">
                        </li>
                </ul>
    
                 <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails main_image">
                    <a href="img/portfolio/moskomoto/basilisk_pant.jpg">
                        <img src="img/portfolio/moskomoto/basilisk_pant.jpg" alt="" width="640" height="360" />
                    </a>
                </div>
    
            </div>
    
            <div class="product_desc">
                
                <ul>

                </ul>
            </div>
        </div>


        <div class="sewing">
                <div class="image1 image">
                    <img src="img/portfolio/moskomoto/Basilisk_pant/knee_part copy.jpg" alt="">
                    <h3></h3>
                </div>
                <div class="image2 image">
                    <img src="img/portfolio/moskomoto/Basilisk_pant/back_part2 copy.jpg" alt="">
                    <h3></h3>
                </div>
                <div class="image1 image">
                    <img src="img/portfolio/moskomoto/Basilisk_pant/back_part copy.jpg" alt="">
                    <h3></h3>
                </div>
            </div>

        <div class="gallery">
            
            <div class="image2 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/zipper.jpg" alt="">
                <h3>To make the zipper bonded adhesive is attached using the iron machine</h3>
            </div>
            <div class="image3 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/zipper2.jpg" alt="">
                <h3>Inner side of the zipper after attaching the adhesive</h3>
            </div>
            <div class="image4 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/zipper4.jpg" alt="">
                <h3>Zipper is under the heat press machine</h3>
            </div>
            <div class="image5 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/parameter3.png" alt="">
                <h3>The parameters set for the zipper to be bonded </h3>
            </div>
            <div class="image1 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/zipper1.jpg" alt="">
                <h3>Zipper after bonding process</h3>
            </div>
            <div class="image1 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/zipper2.jpg" alt="">
                <h3>Description of the image</h3>
            </div>
        </div>
        
        <div class="cohesive">
            <div class="image1 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/cohesive1.jpg" alt="">
                <h3>Attaching cohesive</h3>
            </div>
            <div class="image1 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/cohesive.jpg" alt="">
                <h3>After attaching the cohesive</h3>
            </div>
            <div class="image1 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/heat_press_cohesive.jpg" alt="">
                <h3>Cohesive is put under the heat press machine to make it fully attached</h3>
            </div>
        </div>

        <div class="powder_skirt">
            <div class="image1 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/powder_skirt_seam_tape_overlay.jpg" alt="">
                <h3>Placing the powder skirt inside the garment</h3>
            </div>
            <div class="image2 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/powder_skirt2.jpg" alt="">
                <h3>Primarily attaching the powder skirt using the Iron machine.</h3>
            </div>
            <div class="image3 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/powder_skirt_attached.jpg" alt="">
                <h3>Powder skirt is placed as per measurement</h3>
            </div>
            <div class="image4 image">
                <img src="img/portfolio/moskomoto/Basilisk_pant/powder_skirt_heat_press.jpg" alt="">
                <h3>To make the powder skirt fully attached it needs to be heat pressed using the suitable parameter.</h3>
            </div>
            <div class="image5 image">
                    <img src="img/portfolio/moskomoto/Basilisk_pant/powder_skirt_testing.jpg" alt="">
                    <h3>Our manager is testing.</h3>
                </div>
        </div>
    
        <div class="button">
                <div class="image1 image">
                    <img src="img/portfolio/moskomoto/Basilisk_pant/button.jpg" alt="">
                    <h3></h3>
                </div>
                <div class="image1 image">
                    <img src="img/portfolio/moskomoto/Basilisk_pant/button_attach.jpg" alt="">
                    <h3></h3>
                </div>
                <div class="image1 image">
                    <img src="img/portfolio/moskomoto/Basilisk_pant/button_attached.jpg" alt="">
                    <h3></h3>
                </div>
        </div>
        

  </section>
</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/easyzoom.js"></script>
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});
	</script>
</body>
</html>
