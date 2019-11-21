<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Career | October4";

require("include/head.php");
?>
</head>
<style>
  body{
    overflow-x: hidden;
  }
  .header_img{
      background: url('img/intro_carousel/team.jpg') no-repeat;
      height:100vh;
      background-size:100% 100%;
      position: relative;
  }

  .header_text{
        background:rgba(244,183,86,0.8);
        position:absolute;
        bottom:0px;
        right:0px;
  }
  .header_text h1{
      color:white;
      padding:20px;
      text-align:center;
      font-weight:900;
  }
  
  #open_positions .text{
        font-family:'cardo',sans-serif;
        /* padding:20px; */
       text-align:center;
        font-size: 20px;
  }

  #positions{
      padding:10px 0px;
      display:grid;
      grid-template-columns:repeat(3,1fr);
      grid-gap:50px;
  }
  #positions .card{
      height:250px;
      width:90%;
      border:1px solid rgba(50,50,50,0.2);
      border-radius:0px;
      justify-self:center;
  }
  #positions .card:hover{
    border:1px solid rgba(50,50,50,1);
    transition:all 350ms ease-in-out;
  }
  #positions .card .job-count{
      padding-left:30px;
      padding-top:50px;
      font-size:60px;
      opacity:0.3;
      font-weight:900;
  }
  #positions .card .dept{
      color:black;
      padding-left:30px;
      padding-top:10px;
      font-size:20px;
      font-weight:600;
      font-family:'cardo',sans-serif;
  }
  #positions .card .location{
      color:black;
      padding-left:30px;
      font-size:18px;
      font-weight:400;
      font-family:'cardo',sans-serif;
  }
  #positions .job-count:hover{
      color:black;
      font-weight:900;
      opacity:1;
      transition: all 350ms ease-in-out;
      
  }
  #benefits{
    margin-top:40px;
  }
  #benefits p{
      padding:0px 50px;
  }
.perks{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    grid-column-gap:50px;
    font-family: 'Lato',Helvetica,Arial,Lucida,sans-serif;
    margin-top:20px;
    
}
.perks h3{
    font-weight:600;
    color:black;
    letter-spacing:1px;
    font-size:20px;
    text-align:center;

}
.perks p{
    text-align:justify;
    letter-spacing:1px;
    padding:16px;
    padding-top:0;
    padding-left:0;
}


                                          /* Media Query */

 @media only screen and (max-width: 767px) and (min-width: 300px) {
  .header_text h1{
      font-size:16px;
      font-weight:600;
      padding:5px;
  }
  .section-header h3 {
    font-size: 18px;
    font-weight: 800;
    margin-top:20px;
}
  #open_positions{
      text-align:center;
      position:relative;
  }
  #open_positions .text{
        padding:10px;
        font-size: 16px;
  }

  #positions{
      /* padding:10px 0px; */
      display:grid;
      grid-template-columns:1fr;
      grid-gap:20px;
  }
  #positions .card{
      height:auto;
      width:90%;
      border:1px solid rgba(50,50,50,0.2);
      border-radius:10px;
  }

  #positions .card .job-count{
      padding-left:10px;
      padding-top:30px;
      font-size:40px;
      opacity:0.3;
      font-weight:600;
  }
  #positions .card .dept{
      color:black;
      padding-left:10px;
      padding-top:10px;
      font-size:16px;
      font-weight:600;
      font-family:'cardo',sans-serif;
  }
  #positions .card .location{
      color:black;
      padding-left:10px;
      font-size:16px;
      font-weight:400;
      font-family:'cardo',sans-serif;
  }
  .perks{
    display:block;
}

#benefits{

      margin:20px auto;
      padding-bottom:10px;
  }

  #benefits header{
    padding:20px;
  }
.perks h3{
    font-weight:600;
    color:black;
    letter-spacing:1px;
    font-size:14px;
    text-align: center;

}
.perks p{
    letter-spacing:1px;
    font-size:12px;
    text-align:justify;
}
#positions .job-count:hover{
      color:black;
      font-weight:900;
      opacity:1;
      transition: all 350ms ease-in-out;
      
  }
  #positions .card .job-count{
      padding-left:30px;
      padding-top:50px;
      font-size:60px;
      opacity:0.3;
      font-weight:900;
  }

}
@media only screen and (max-width: 1024px) and (min-width: 768px) {
  #open_positions{
      padding:50px;
      width:50vw;
      margin:50px auto;
      text-align:center;
      position:relative;
      padding-bottom:10px;
  }

}

</style>

<body>  
    <?php $page = "career";require("include/navbar.php"); ?>
<!--==========================
    Intro Section
  ============================-->
  
  <header class="section-header">
          <h3>Career</h3>
  </header>

  <div class="header_img">
        <div class="header_text">
            <h1>Join our team</h1>
        </div>
  </div>
<section id="open_positions" style="margin-top:20px;">
    <header class="section-header">
      <h3>Open positions</h3>
</header>
    <div class="text">
        <p>Those who are expecting a day to day 9 to 5 job, are not welcomed here.</p>
        <p>We welcome only the talented young people who want to learn and build their career in this industry.</p>
    </div>
  </section>
  <?php $db = mysqli_connect('localhost', 'root', '', 'phplogin'); 
  $result = $db->query("SELECT * FROM job_post")  or die($db->error);
  
  ?>

  <section id="positions">
  <?php while($row = $result ->fetch_assoc()){ 
    
    
    ?>
          <div class="card">
            <h1 class="job-count"><?php echo $row['no_of_post']; ?></h1>
            <h5 class="dept"><?php echo $row['department']; ?></h5>
            <p class="location"><?php echo $row['location'];?></p>
            <a href="job_details.php?post_id=<?php echo $row['id']; ?>" target="_blank" style="text-align:right;"><button class="btn btn-info btn-xs">Details</button></a>
          </div>


  <?php } ?>
  </section>
          <!-- <div class="card">
          <h1 class="job-count">5</h1>
            <h5 class="dept">Quality Assaurance and Audit</h5>
            <p class="location">Chittagong/Dhaka</p>
          </div>

          <div class="card">
          <h1 class="job-count">10</h1>
            <h5 class="dept">Merchandising and P.D</h5>
            <p class="location">Chittagong</p>
          </div>

          <div class="card">
            <h1 class="job-count">2</h1>
            <h5 class="dept">Merchandising and P.D</h5>
            <p class="location">Chittagong</p>
          </div>

          <div class="card">
          <h1 class="job-count">2</h1>
            <h5 class="dept">Merchandising and P.D</h5>
            <p class="location">Chittagong</p>
          </div>

          <div class="card">
          <h1 class="job-count">10</h1>
            <h5 class="dept">Merchandising and P.D</h5>
            <p class="location">Chittagong</p>
          </div> -->


         <section id="benefits">
            
          <header class="section-header">
            <h3>Perks & Benefits</h3>
          </header>
                <div class="perks">
                    <div class="perk1">
                        <h3>Relax, we've got you covered</h3>
                        <p>We take care of our employees in more ways than one. Our competitive benefits package includes premium medical, dental, and vision coverage for employees and their dependents. We also offer up to #of weeks of paid parental leave, daily gourmet lunches And so many snacks.</p>
                    </div>

                    <div class="perk2">
                    <h3>Work-life balance</h3>
                        <p>We believe that quality time outside the office is vital to our employees’ satisfaction at work. That’s why our flexible PTO plan encourages team members to take time off so they can come back refreshed.</p>
                    </div>

                    <div class="perk3">
                    <h3>Stay Informed</h3>
                        <p>We’re dedicated to ensuring all employees have the information they need to do their jobs well. Our monthly All Hands meetings, email newsletters, and CEO Office Hours are just a few of the programs we run to bring our three offices together and share key aspects of the business across the entire organization.</p>
                    </div>

                    <div class="perk3">
                    <h3>We value our people</h3>
                        <p>We’re serious about sharing in Squarespace’s successes. All employees receive an equity package in the company as part of their total compensation</p>
                    </div>


                </div>

         </section>

         <!-- <section id="tours">
          <header class="section-header">
            <h3 >Tours & Travels</h3>
          </header>
          
          <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/team/tours-carousel/img3.jpg" alt="A gift to our CEO">
                <div class="carousel-caption">
                  <span>Saint Martin 2017</span>
                  <p></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="img/team/tours-carousel/bandarban1.jpg" alt="">
                <div class="carousel-caption">
                  <span>Bandarban 2018</span>
                  <p></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="img/team/tours-carousel/bandarban2.jpg" alt="">
                <div class="carousel-caption">
                  <span></span>
                  <p></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="img/team/tours-carousel/sm2.jpeg" alt="">
                <div class="carousel-caption">
                  <span></span>
                  <p></p>
                </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          
          </section>-->

<footer id="footer">
  <?php require("include/footer.php"); ?>
</footer>
</body>
</html>

