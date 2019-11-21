<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Contact Us | October 4";

require("include/head.php");
?>
</head>
<style>
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
.contact-address{
  background:white;
  font-weight:400;
}

.mapouter{
  margin-top: 50px;
  margin-bottom:50px;
}
.head_office .heading,.bd_office .heading{
  text-align:center;
  font-size:30px;
}

.head_office span,.bd_office span{
  background:black;
  color:white;
  padding:20px;
  margin-top:20px;
  font-weight:bold;
}

@media screen and (min-width: 300px) and (max-width: 768px){
  .head_office .heading,.bd_office .heading{
  font-size:20px;
}

.head_office span,.bd_office span{
  background:black;
  color:white;
  padding:10px;
  margin-top:20px;
  font-weight:bold;
}
}

</style>
<body>
  <?php $page = "contact";require("include/navbar.php"); ?>
<main id="main">
  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Contact Us</h3>
        <p>You can get in touch with us if you have any queries.</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Head Office Address</h3>
                           Unit: C-03,14/F<br>
                              Chiu Tat Factory Building<br>
                              708-710 Prince Edward Road East<br>
                              San Po Kong, Kowloon<br>
                              <strong>Email:</strong> contact@october4world.com
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
              <i class="fa fa-address-book"></i>
            
              <p><strong>Phone: </strong><a href="">+852-22593330</a></p>
              <br>
            <h6><strong>Email:</strong> contact@october4world.com</h6>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Bangladesh Office Address</h3>
            October 04 Limited. <br>
             Unit # A-1 and D-1, 1st Floor,
             <br>
              Sanmar RL Park View 
              <br>35/25 Jakir Hossain Road
              <br>
              Khulshi.Chittagong, Bangladesh.
          </div>
        </div>

      </div>

      <div class="head_office">
        <div class="heading">
          <span>Head Office Location</span>
        </div>
        <div class="mapouter">
        <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Chiu%20Tat%20Factory%20Building,708-710,Prince%20Edward%20Road%20East,San%20Po%20Kong%20Kowloon&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <!-- <a href="https://www.bitgeeks.net/embed-google-map/">bitgeeks</a> -->
        </div>
        <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
        </style>
        </div>
      </div>

      <div class="bd_office">
        <div class="heading">
          <span>Bangladesh Office Location</span>
        </div>
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=sanmar%20rl%20park%20view&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          {{-- <a href="https://www.bitgeeks.net/embed-google-map/">bitgeeks.net</a> --}}
        </div>
        <style>
        .mapouter{position:relative;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
      </div>
      </div>
  </section><!-- #contact -->

</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
</footer>
</body>
</html>
