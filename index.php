<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "October4 ltd";
require("include/head.php");
?>
</head>
<style>
 body{
    overflow-x: hidden;
  }
    @media only screen and (min-width: 320px) and (max-width: 479px){
      .company_logo{
      height: 30px!important;
      width: 30px!important;
    }
  .carousel-content {
  font-size: 18px!important;
  font-weight: 500!important;
}
#skills .progress{
     height: 30px;
     margin-bottom: 10px;
 }
 #skills .progress .skill {
    font-size: 8px;
    margin: 0 0 0 10px;
}
#skills .progress .skill .val {
    margin: 0 5px 0 0;
}
#technology p{
  font-size: 16px!important;
  font-weight: 600;

}
#technology{
  display:block!important;
}
#technology>div{
  margin-bottom:10px;
}
#header #logo i{
    font-size: 10px;
}
    }

    @media only screen and (min-width: 480px) and (max-width: 767px){
      .company_logo{
      height: 50px!important;
      width: 50px!important;
    }
  .carousel-content {
  font-size: 26px!important;
  font-weight: 600!important;
}
#skills .progress{
     height: 30px;
     margin-bottom: 10px;
 }
 #skills .progress .skill {
    font-size: 12px;
    margin: 0 0 0 10px;
}
#skills .progress .skill .val {
    margin: 0 5px 0 0;
}
#technology p{
  font-size: 18px!important;
  font-weight: 600;
}
#technology{
  display:block!important;
}
#technology>div{
  margin-bottom:10px;
}
    }

    @media only screen and (min-width: 768px) and (max-width: 991px){
      #technology p{
      font-size: 22px!important;
      font-weight: 800;
}
    }

    /* @media only screen and (min-width: 992px){

    } */

    .company_logo{
      height: 70px;
      width: 70px;
    }
  .carousel-content {
  color: white;
  font-size: 40px;
  font-weight: 700;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
  width: 15em;
  animation: type 5s steps(120, end);
  text-transform:uppercase;
  letter-spacing: .1em;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-52%,-20%);
  font-family: "Montserrat", sans-serif;
}
@keyframes type{ 
  from { width: 0; } 
  0%{
    transform: translate(-50%,-20%);
  }
  50%{
    transform: translate(-50%,-20%);
  }
  80%{
    transform: translate(-50%,-20%);
  }
  90%{
    transform: translate(-52%,-20%);
  }
  95%{
    transform: translate(-52%,-20%)
  }
  100%{
    transform: translate(-52%,-20%);
  }
} 

#technology{
  display: grid;
  grid-template-columns: repeat(2,2fr);
  grid-gap: 10px;
  background: rgba(240, 240, 240, 0.5);
  height: auto;
}
#technology>div{
  text-align: center;
  background: white;
  padding: 40px;
  width: 48vw;
  height: 400px;
  position: relative;
  margin:10px auto;
}
#technology div:nth-child(1){
  background: url('img/technology/seam_seling.jpg');
  background-size:100% 100%;
}
#technology div:nth-child(2){
  background: url('img/technology/bonding.jpg');
  background-size:100% 100%;
}
#technology div:nth-child(3){
  background: url('img/technology/down_insulation.jpg');
  background-size:100% 100%;
}
#technology div:nth-child(4){
  background: url('img/technology/heating.jpg');
  background-size:100% 100%;
}

#technology p{
  font-family: 'Lato',sans-serif;
  font-size: 32px;
  color: #19d26e;
  font-weight: 800;
  letter-spacing: 3px;
  background: rgba(50, 50, 50, 0.4);
  padding: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%,-40%);
  min-width:80%;

}
@media screen and (max-width: 768px) and (min-width: 300px)
{
#technology>div{
  text-align: center;
  background: white;
  padding: 40px;
  width: 95%;
  height: 400px;
  position: relative;
  margin:10px auto;
}
#facts .counters p {
    font-size: 16px;
}
#facts .counters span {
    font-weight: bold;
    font-size: 36px;
}
}
</style>
<body>
	<?php $page = "home"; require("include/navbar.php"); ?>

	<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro_carousel/header2.jpg" alt="Our Products"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <img src="transparent_logo.png" alt="" class="company_logo" >
                October4 hk ltd
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/carousel1.jpg" alt="Kids pant"></div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/carousel2.jpg" alt="Kids pant"></div>
          </div>
          
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/carousel3.jpg" alt="Smooth sewing"></div>
          </div>

          <!-- <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/carousel4.jpg" alt="Laser Cut"></div>
          
          </div> -->

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/carousel5.jpg" alt="Laser Cut"></div>
          </div>
          
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/carousel6.jpg" alt="Bonded zipper"></div>
          </div>

           <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/carousel7.jpg" alt="Waterproof"></div>
          </div>
        
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro_carousel/team.jpg" alt="Our Team"></div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills" class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Product Diversity</h3>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Technical Outerwear / Outdoor / Sports <i class="val">70%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Lifestyle and performance<i class="val">25%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Hard Goods<i class="val">5%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    <!--         Technology Section    -->
    <header class="section-header">
        <h3>Technology</h3>
    </header>
    <div id="technology">
          <div class="seam_sealing">
            <a href="technology.php" target="_blank">
              <p>Seam Sealing / Waterproof</p>
            </a>
          </div>

          <div class="sew_free">
          <a href="technology.php" target="_blank">
            <p>Sew Free / Bonding</p>
          </a>
          </div>

          <div class="down">
            <p>Down and Insulation</p>
          </div>

          <div class="heating">
            <p>Heating</p>
          </div>
    </div>

<!--Technology Section ends here    -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Below are some fact about us and what we have accomplised so far.</p>
        </header>

        <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
            <a href="portfolio.php">
            <span data-toggle="counter-up">7</span>
            <p>Clients</p>
            </a>
              
            </div>

          <div class="col-lg-3 col-6 text-center">
            <a href="about_us.php#business">
            <span data-toggle="counter-up">10</span>
            <p>Years Of Business</p>
            </a>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <a href="team.php">
            <span data-toggle="counter-up">54</span>
            <p>Dedicated Mind</p>
            </a>
          </div>
          
          <div class="col-lg-3 col-6 text-center">
              <a href="manufacturing.php">
              <span data-toggle="counter-up">32</span>
              <p>Production Line</p>
              </a>
          </div>

        </div>


      </div>
    </section><!-- #facts -->

  <section id="clients" class="wow fadeInUp">
      <div class="container-fluid">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <a href="https://www.didriksons.com" target='_blank'><img src="img/clients/did_logo.png" alt="" style="margin:20px;"></a>
          <a href="https://www.backcountry.com/" target='_blank'><img src="img/clients/bc_logo.png" alt=""style="margin:20px;"></a>
          <a href="https://www.chevalier.se" target='_blank'><img src="img/clients/chevalier-logo.png" alt=""style="margin:20px;"></a>
          <a href="https://moskomoto.com" target='_blank'><img src="img/clients/mm_logo.png" alt=""style="margin:20px;"></a>
          <a href="https://maier-sports.com" target='_blank'><img src="img/clients/ms_logo.png" alt=""style="margin:20px;"></a>
          <a href="https://trewgear.com/" target='_blank'><img src="img/clients/trew_logo.png" alt=""style="margin:20px;"></a>
          <a href="https://halti.com" target='_blank'><img src="img/clients/halti_logo.png" alt=""style="margin:20px;"></a>
        </div>

      </div>
    </section>
</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>
</body>
</html>