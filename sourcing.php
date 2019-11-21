<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "October4 ltd";
require("include/head.php");
?>
</head>

<style>
.box1{
    height: 30vh;
    width:60vw;
    background: rgba(240, 240, 240,0.6);
    box-shadow: 5px 5px 10px black;
    margin: 40px auto; 
    font-size: 30px;
    position: relative;
    font-family: 'Lato',sans-serif;
    text-align: center;
}
.box1 span{
    position: absolute;
    left: 50%;
    top: 50%;
    width:80%;
    transform: translate(-50%,-50%);
    color: white;
    background-image: radial-gradient( circle 862px at 3.9% 23.8%,  rgba(17,58,93,1) 0%, rgba(18,51,80,1) 90.8% );
    padding: 20px;
    border-radius: 10px;    

}
.fabric span{
    text-align: center;
    font-weight: 800;
    display: block;
    font-size: 25px;
    background: rgba(17,58,93,0.7);
    width:300px;
    margin: 20px auto;
    padding: 20px;
    color: white;
}
.fabric .header{
    text-align:center;
}
.fabric_partners{
    background: url('img/services/sourcing/fabric.jpg');
    height: auto;
    background-size: cover;
    position: relative;
}
.material_partners{
    background: url('img/services/sourcing/trim_card.jpg');
    height: auto;
    background-size: cover;
    position: relative;
}
.material_partners::before,.fabric_partners::before{
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.9);
    z-index: 9;
}
.material_partners .container-fluid,.fabric_partners .container-fluid{
     position: relative;
    z-index: 10;
}
.grid-container {
  display: grid;
  grid-column-gap:10px;
  grid-template-columns: repeat(5,1fr);
  
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (min-device-width:480px) and (max-device-width: 767px) {
    .grid-container{
        display: grid;
        grid-template-columns: repeat(2,1fr);
    }
    .box1{
    height: 20vh;
    width:100%;
    background: rgba(240, 240, 240,0.6);
    box-shadow: 5px 5px 10px black;
    margin: 40px auto; 
    font-size: 16px;
    position: relative;
    font-family: 'Lato',sans-serif;
    text-align: center;
}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 900px){
    .grid-container{
        display: grid;
        grid-template-columns: repeat(3,1fr);
    }
    .box1{
    height: 20vh;
    width:50vw;
    background: rgba(240, 240, 240,0.6);
    box-shadow: 5px 5px 10px black;
    margin: 40px auto; 
    font-size: 16px;
    position: relative;
    font-family: 'Lato',sans-serif;
    text-align: center;
}
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (max-width: 479px) {
    .grid-container{
        display: block;
    }
    .box1{
    height: 20vh;
    width:100%;
    background: rgba(240, 240, 240,0.6);
    box-shadow: 5px 5px 10px black;
    margin: 40px auto; 
    font-size: 16px;
    position: relative;
    font-family: 'Lato',sans-serif;
    text-align: center;
}
}

.grid-item {
  font-size: 30px;
  text-align: center;
  margin:20px 0px;
}
.grid-container img{
    height: 150px;
    width:200px;
}

</style>

<body>
    <?php $page='sourcing';require("include/navbar.php"); ?>

<main id="main">

<!--==========================
  Services Section
============================-->
<section id="services">
  <div class="container-fluid">

    <header class="section-header wow fadeInUp">
      <h3>Sourcing</h3>
    </header>

    <div class="box1">
        <span>We source almost all the materials needed for garments manufacturing</span>
    </div>

    <div class="fabric">
        <div class="header">
            <span>Fabric Sourcing</span>
            <p>Our fabric sourcing partners</p>
        </div>
        <div class="fabric_partners">
            <div class="container-fluid">
                    <div class="grid-container">
   
                        <div class="grid-item" >
                            <a href="http://www.eventfabrics.com/" target="_blank"><img src="img/services/sourcing/fabric-source/event.jpg" alt=""></a>
                        </div>

                        <div class="grid-item">
                            <a href="http://www.superfabric.com/" target="_blank">
                            <img src="img/services/sourcing/fabric-source/superfabric.png" alt=""></a>
                        </div>

                        <div class="grid-item">
                            <a href="https://www.toray.com/products/prod_001.html#/" target="_blank">
                            <img src="img/services/sourcing/fabric-source/Toray_logo.png" alt=""></a>
                        </div>

                        <div class="grid-item">
                            <a href="#" target="_blank">
                                <img src="img/services/sourcing/fabric-source/toyota.png" alt=""></a>
                    </div>

                        <div class="grid-item">
                                <a href="http://www.achahead.com.tw/en/" target="_blank">
                                    <img src="img/services/sourcing/fabric-source/achievetex.jpg" alt=""></a>
                        </div>
                            
                        <div class="grid-item">
                                <a href="http://www.dry-tex.com" target="_blank">
                                <img src="img/services/sourcing/fabric-source/DryTex.jpg" alt=""></a>
                        </div>  

                        <div class="grid-item">
                                <a href="http://www.dry-tex.com" target="_blank">
                                <img src="img/services/sourcing/fabric-source/singtex_logo.png" alt=""></a>
                        </div>

                        <div class="grid-item">
                            <a href="http://www.chgtex.com/tw/index.aspx" target="_blank">
                            <img src="img/services/sourcing/fabric-source/chiaher_logo.png" alt=""></a>
                        </div>

                        <div class="grid-item">
                        <a href="https://www.schoeller-textiles.com/de/" target="_blank">
                        <img src="img/services/sourcing/fabric-source/schoeller-logo.jpg" alt=""></a>
                        </div>

                        <div class="grid-item">
                                <a href="http://en.hmtex.com/">
                                <img src="img/services/sourcing/fabric-source/huamao.jpg" alt="" width=""></a>
                        </div>
                        <div class="grid-item">
                                <a href="http://www.bristex.com/">
                                <img src="img/services/sourcing/fabric-source/bristex.jpg" alt=""></a>
                        </div>
                        <div class="grid-item">
                                <a href="https://www.sunfengtextile.com/">
                                <img src="img/services/sourcing/fabric-source/sunfengtextile.png" alt=""></a>
                        </div> 
                        <div class="grid-item">
                                    <a href="https://www.youngonecorporation.com/">
                                    <img src="img/services/sourcing/fabric-source/youngone.jpg" alt=""></a>
                        </div> 
                        <div class="grid-item">
                                    <a href="http://joujoufish.com/">
                                    <img src="img/services/sourcing/fabric-source/jou_jou_fish.png" alt=""></a>
                        </div>

                        
                            
                    </div>
            </div>
        </div>
    </div>

    <div class="fabric">
            <div class="header">
                <span>Material Sourcing</span>
                <p>Our material sourcing partners</p>
            </div>
            <div class="material_partners">
                <div class="container-fluid">
                        <div class="grid-container">
       
                                <div class="grid-item">
                                    <a href="https://www.bemisworldwide.com" target="_blank"><img src="img/services/sourcing/material-source/bemis.png" alt=""></a>
                                </div>
                                <div class="grid-item">
                                    <a href="https://www.ykk.com/english/" target="_blank"><img src="img/services/sourcing/material-source/YKK.png" alt=""></a>
                                </div>
                                <div class="grid-item">
                                    <a href="http://primotex.com/buttons/"></a>
                                    <img src="img/services/sourcing/material-source/Primotex.png" alt="">
                                </div>  
                                <div class="grid-item">
                                    <img src="img/services/sourcing/material-source/duraflex.jpg" alt="">
                                </div>
                                <div class="grid-item">
                                    <img src="img/services/sourcing/material-source/framis.jpg" alt="">
                                </div>
                                <div class="grid-item">
                                    <img src="img/services/sourcing/material-source/ideal.jpeg" alt="">
                                </div>
                                <div class="grid-item">
                                    <img src="img/services/sourcing/material-source/cohaesive-logo.png" alt="">
                                </div>
                                <div class="grid-item">
                                    <img src="img/services/sourcing/material-source/talon.jpeg" alt="">
                                </div> 
                                <div class="grid-item">
                                    <img src="img/services/sourcing/material-source/sealon.jpg" alt="">
                                </div>
                                <div class="grid-item">
                                    <img src="img/services/sourcing/material-source/vim.jpg" alt="">
                                </div>    
                        </div>
                </div>
            </div>
        </div>

</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>
</body>
</html>
