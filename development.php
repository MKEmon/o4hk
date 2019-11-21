<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Developmnet | October4";
require("include/head.php");
?>
</head>

<style>
    body{
        overflow-x: hidden;
    }
 .parallax1{
    background-image: url('img/services/development/hero_image.jpg');
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    height: 100vh;
    position: relative;
 } 
 .text1{
     background: rgba(50, 50, 50, 0.8);
     min-width:90%;
     position: absolute;
     top: 60%;
     left: 50%;
     transform: translate(-50%,-50%);
     padding: 20px;
     box-shadow: 0px 0px 20px whitesmoke;
 }
 .parallax1 p{
     font-family: 'Montserrat', sans-serif;
     font-size: 24px;
     color: white;   
     text-align: center;  
     letter-spacing: 2px;
     font-weight: 500;
 }
 .parallax2{
    background-image: url('img/services/development/sketch.png');
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    height: 100vh;
    position: relative;
 }
 .parallax2::before,.parallax3::before,.parallax4::before,.sample_making::before{
    position: absolute;
        content: '';
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(80, 80, 80, 0.5);
 }
 .transiton_style{
    /* min-width:90%; */
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
 }
  p.text3{
     font-size: 20px;
     padding: 10px;
     color: white;
     font-family: 'Montserrat', sans-serif;
     letter-spacing: 2px;
     text-align: center;
     font-weight: 500;
     background: rgba(50,50,50,0.8);
     
 }

 .tech_file ul{
     transition: all 3s ease-out;
     width:400px;
     padding: 0;
     margin-left: 100px;
     font-family: 'Montserrat', sans-serif;
 }
 .tech_file ul li{
     list-style-type: none;
     margin: 0px;
     padding: 10px;
     font-size: 20px;
     background: rgba(50,50,50,0.8);
     color: white;
     letter-spacing: 1px;
     border-bottom: 1px solid white;
     opacity: 0;
     transition: all 1s ease-in-out;
     text-align: center;
     font-weight: 500;
 }

 .tcc.fade-in2{
     opacity: 1;
     transform: translateY(0px);
 }
    .parallax3{
        background: url('img/services/development/merchandiser_analysis.JPEG');
        background-attachment: fixed;
        background-size: cover;
        height: 100vh;
        position: relative;
    }
    .analysing_file,.pattern_making{
        position: absolute;
        grid-gap: 20px;
        opacity: 0;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        transition: all 1s ease-in-out;
        display: grid;
        grid-template-columns: 1fr;
    }
    .analysing_file p,.pattern_making p{
        padding: 20px;
        font-size: 20px;
        background: rgba(0,0,0,0.5);
        color: white;
        text-align: center;
        letter-spacing: 1px;
        font-family: 'Montserrat', sans-serif;
    }
    .analysing_file.fade-in{
        opacity: 1;
        /* transform: translateY(0); */
    }
    .heading.fade-in3{
        opacity: 1;
    }

    .parallax4{
        background: url('img/services/development/pattern.jpg');
        background-attachment: fixed;
        background-position: center;
        height: 100vh;
        position: relative;
    }
    .pattern_making.fade-in4{
        opacity: 1;
        /* transform: translateY(0); */
    }
    #complete_pattern{
        margin: 20px;
        position: relative;
    }
    #complete_pattern h4{
        text-align: center;
        font-size: 18px;
        font-weight: 800;
        color: #06de;
        letter-spacing: 2px;
        font-family: 'Montserrat', sans-serif;
    }
    .task_complete_pattern{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }
    .task_complete_pattern>p{
        justify-self: center;
        background: rgba(50, 50, 50, 0.6);
        padding: 30px;
        font-size: 24px;
        color: white;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600px;
        text-align: center;
    }
.sample_making{
    background: url('img/services/development/sample_making.jpg');
    background-attachment: fixed;
    background-size: cover;
    height: 100vh;
    position: relative;
}

.divider{
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        padding: 10px;
        color: #06de;
        letter-spacing: 2px;
        text-align: center;
        /* background-color: #111; */
        font-weight: 800;
        position: relative;
        /* border: 10px solid black;   */
        margin: 20px 0;
}
.divider span{
        background: white;
        /* padding: 33px; */
        display: block;
        padding: 10px;
        margin: 0px;
        /* border-bottom: 1px solid black;
        border-top: 1px solid gray; */
}

@media screen and (min-width: 300px) and (max-width: 768px)
    {
  .parallax1{
      background-size: 100% 100%;
      background-repeat: no-repeat;
  }
  .parallax2{
      background-size: 100% 100%;
      background-repeat: no-repeat;
  }
  .parallax3{
      background-size: 100% 100%;
      background-repeat: no-repeat;
      background-position: center;
  }
  .parallax4{
      background-size: 100% 100%;
      background-repeat: no-repeat;
      background-position: center;
  }
  .sample_making{
      background-size: 100% 100%;
      background-repeat: no-repeat;
      background-position: center;
  }
 .divider{
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        margin: 15px 0;
    }
    .transiton_style{
    min-width:90%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
 }
 p.text3,.analysing_file p,.pattern_making p,.tech_file ul li{
     font-size: 16x;
     font-size: 16px;
     font-weight: normal;
     }

 .tech_file ul{
     transition: all 3s ease-out;
     width:auto;
     padding: 0;
     font-weight: normal;
     margin-left: 0;
 }
    .analysing_file,.pattern_making{
        position: absolute;
        grid-gap: 20px;
        opacity: 0;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        transition: all 1s ease-in-out;
        display: grid;
        grid-template-columns: 1fr;
        width:400px;
    }
    .task_complete_pattern{
        display: block;
    }
    .task_complete_pattern>p{
        background: rgba(50, 50, 50, 0.6);
        padding: 20px;
        font-size: 20px;
        font-weight: 400px;
        text-align: center;
    }
}
</style>
<body>
    <?php $page='development';require("include/navbar.php"); ?>
<main id="main">

    <!--==========================
  Services Section
============================-->
    <section id="services">
        <div class="container-fluid">

            <header class="section-header wow fadeInUp">
                <h3>Development</h3>
            </header>

           <div class="parallax1">
                <p class="text1">We translate blue sky idea into reality</p>
           </div>

           <p class="divider"><span>Development process starts at the sketch table while working with respective designers</span></p>
           <div class="parallax2">
               <div class="transiton_style">
                    <p class="text3">Work with the respective team to compile the tech file with</p>
                    <div class="tech_file">
                        <ul id="tcc">
                            <li class="tcc">BOM</li>
                            <li class="tcc">Construction and Technical Details</li>
                            <li class="tcc">Measurement Spec</li>
                            <li class="tcc">Workmanship Guideline</li>
                        </ul>
                    </div>
               </div>
                
           </div>


           
           <p class="divider"><span>Merchandising team analyses the file </span></p> 

           <div class="parallax3">
               
               <div class="analysing_file">
                   <p>Develop and Source <br>appropriate fabrics and materials</p>
                   <p>Prepares the costing</p>
               </div>
           </div>

           
           <p class="divider"><span>From the tech file pattern team carries out the informations</span></p>
           <div class="parallax4">
                
                <div class="pattern_making">
                    <p>Builds the pattern</p>
                    <p>Develops the features with mockup</p>
                </div>
                
           </div>


           <div id="complete_pattern">
               <h4>After Finalising the Pattern</h4>
               <div class="task_complete_pattern">
                   <p>Builds the prototypes</p>
                   <p>Makes Consumption</p>
               </div>
           </div>

            <div class="sample_making">
            </div>
    </section>

    <footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
    <script>

            var controller = new ScrollMagic.Controller();

            var ourScene = new ScrollMagic.Scene({
                triggerElement: '.tcc',
                triggerHook: 0.8
            })
            .setClassToggle('.tcc','fade-in2')
            .addTo(controller);
           var ourScene2 = new ScrollMagic.Scene({
                triggerElement: '.analysing_file',
                triggerHook: 0.6
            })
            .setClassToggle('.analysing_file','fade-in')
            .addTo(controller);

            var ourScene3 = new ScrollMagic.Scene({
                triggerElement: '.heading',
                triggerHook: 0.7
            })
            .setClassToggle('.heading','fade-in3')
            .addTo(controller);

            var ourScene4 = new ScrollMagic.Scene({
                triggerElement: '.pattern_making',
                triggerHook: 0.7
            })
            .setClassToggle('.pattern_making','fade-in4')
            .addTo(controller);

           

            
    </script>  
</body>
</html>



