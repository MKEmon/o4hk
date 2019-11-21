<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "Team | October4";

require("include/head.php");
?>
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">


</head>

<style>
  body{
    overflow-x:hidden;
  }
.section-header{
  margin: 0px 0 20px 0;
}

.image img{
  display:block;
  margin:0 auto;
}
.box{
    height: 200px;
    width: 200px;
    background: white;
    margin: 0 50px;
}
.text{
  display:flex;
  justify-content:center;
  align-items:center;
}
.text p{
  padding:20px;
  text-align:justify;
  font-family: 'Lato',Helvetica,Arial,Lucida,sans-serif;
    color: #989bac;
    letter-spacing: 0.4px;
}
.emp{
  justify-self: center;
  text-align: center;
  margin-bottom: 30px;
}
.emp img{
  height: 200px;
  width: 200px;
  display: block;
 
}
.image h1{
  /* font-family: 'Quicksand', sans-serif; */
  font-weight: 900;
  padding-top: 10px;
  font-size:24px;
  letter-spacing:1px;
}
.image h2{
  font-weight:600;
  font-size:20px;
  letter-spacing:0.5px;
}
/* .emp p{
  font-family: 'Amatic SC', cursive;
  font-size: 24px;
  font-weight: 600;
  text-align: center;

} */
.emp i{
  padding: 0px 20px;
}
.employee_details h3{
      margin: 20px 0px 5px 0px;
      color:#777777;
      font-family: 'Ubuntu', sans-serif;
      font-weight:600;
      letter-spacing:1px;
  }

  .employee_details h4,.employee_details h5{
      color: #a5a5a5;
      margin-bottom:5px;
      font-family: "Montserrat", sans-serif;
      font-weight:500;
  }
@media (min-width:400px) and (max-width:992px){
  .image img{
  height:300px;
  width:300px;
}
}

@media (min-width:400px){


.info h1{
  font-size: 30px;
  font-weight: 900;
}

.team_title{
  background: gray;
  margin-bottom: 30px;
  color: white;
}
.team_title h1{
  padding: 20px;
  text-align: center;
  font-family: 'Cinzel', serif;color: white;
  font-size: 30px;
}
.employee{
  display: grid;
  grid-template-columns: 1fr;
  grid-gap:20px;
}
.emp{
  justify-self: center;
  text-align: center;

}
.emp img{
  height: 200px;
  width: 200px;

  display: block;
 
}

.employee_details h2{

      margin-top: 20px;
      font-family: 'Josefin Sans', sans-serif;
     
      margin-bottom:0;
  }
   }
@media (min-width:800px){
  .employee{
  display: grid;
  grid-template-columns: repeat(2,1fr);
  grid-gap:20px;
}
.employee_details h2{
 
      margin-top: 20px;
     
      margin-bottom:0;
  }
}
@media (min-width:1200px){

.team_title{
  background: gray;
  margin-bottom: 30px;
  color: white;
}
.team_title h1{
  padding: 20px;
  text-align: center;
  font-family: 'Cinzel', serif;color: white;
  font-size: 30px;
}
.employee{
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap:20px;

}
.employee_details h2{
  
      margin-top: 20px;
      margin-bottom:0;
  }

}
</style>

<body>
  <?php $page = "team";require("include/navbar.php"); ?>

<main id="main">
  
  <header class="section-header">
    <h3 >Our Team</h3>
  </header>
 <div class="row">
   <div class="col-lg-5 col-md-6 col-sm-12 image">
    <h1 style="text-align: center;">Mohammed Taufik Ahsan</h1>
    <h2  style="text-align: center;">FOUNDER & CEO</h2>
    <img src="img/team/CEO.png" alt=""> 
   </div>
   <div class="col-lg-7 col-md-6 col-sm-12 text">
   <p>This firm is brain child dream of Mohammed Taufik Ahsan who is the founder of this company and also CEO and President. 
      About this firm, Mr. Ahsan said that “Capitalizing my last 18 + years of experience in Apparel Manufacturing, Product Development, Innovation and Marketing then took on a new challenge and have established October4 HK Ltd He also said that, 
      Things are Going Great and exactly as planned at O4HL, I have one of the best teams in the industry and I am so proud of my team. 
      yes, sometimes they make mistakes when they are doing something for the first time but the best part is I managed to let them learn from it. 
      He said, Myself and the entire team are fully convinced and motivated than ever to be able to do even better, 
      and we know that our best is yet to come.” About the timeline of this firm,
      Mr. Ahsan said- “before established O4HL, I was hired by the US-based leading Seam tape and Sewfree Adhesives manufacturer 
      Bemis as to utilize my manufacturing and product development experience to bring a different dynamic to their whole marketing process."
    </p>
   </div>
 </div>

<!-- 
 <div class="md">
    <div class="image">
        <h1  style="text-align: center;">Md. Neamul Ahasan</h1>
        <h2  style="text-align: center;">MD</h2>
        <img src="img/team/md.png" alt="">
      </div> 
    <div class="info">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum fugiat asperiores maxime. Temporibus, in beatae? Quos ipsam beatae nam ex!</p>
        <h1>Info</h1>
       <p><b>Mail:</b> abc@october4world.com</p>
    </div>
    <div class="lorem"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perferendis delectus in ipsam consequatur suscipit expedita commodi provident quod earum atque nulla explicabo ad soluta harum, saepe error natus velit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora fuga similique veniam molestias quam aperiam ullam exercitationem culpa odio commodi!</p></div>

   
</div> -->
<section id="team">
  <header class="section-header">
    <h3 >Experienced Team</h3>
  </header>

  

<div class="employee ">
  <?php $db = mysqli_connect('localhost', 'root', '', 'phplogin'); 
  $result = $db->query("SELECT * FROM images order by category")  or die($db->error);

    while($row = $result->fetch_assoc()){
        $imageURL = 'img/uploads/'.$row["file_name"];
        $name = $row['name'];
        $dept = $row['department'];
        $designation = $row['designation'];
  
  ?>
    <div class="emp emp1">
      <div class="box">
      <img src="<?php echo $imageURL; ?>" alt="<?php echo $name;?>">
    </div>
    <div class="employee_details">
      <h3 class="name"><?php echo $name; ?></h2>
      <h5 class="others"><?php echo $designation; ?></h3>
      <h5 class="others"><?php echo $dept; ?></h4>
      <div class="social_icon">
            <a href="skype:live:biswajitmerchant?chat"><i class="fa fa-skype" aria-hidden="true" style="font-size:24px;color:rgb(0,175,240)"></i></a>
            <i class="fa fa-twitter fa-2x fa-lg" style="font-size:24px; color:#38A1F3;" ></i>
            <i class="fa fa-linkedin fa-2x fa-lg" style="font-size:24px; color: #0e76a8; " ></i>
      </div>
      </div>
    </div>
<?php } ?>
    <!-- <div class="emp emp2">
        <div class="box"><img src="img/team/shamim.png"alt="" data-0="height:0%; opacity:0" data-1800="height:110%;opacity:1;"></div>   
        <div class="employee_details" data-0="transform:scale(0.6); opacity:0;" data-1900="transform:scale(1); opacity:1;">
        <h2>Mr. Shamim</h2>
        <h3>Deputy Manager</h3>
        <h4>Merchandinsing & P.D</h4>
          <div class="social_icon">
          <a href="skype:shamim...1?chat"><i class="fa fa-skype" aria-hidden="true" style="font-size:24px;color:rgb(0,175,240)"></i></a>
          <i class="fa fa-twitter fa-2x fa-lg" style="font-size:24px; color:#38A1F3;" ></i>
          <i class="fa fa-linkedin fa-2x fa-lg" style="font-size:24px; color: #0e76a8; "></i>
          </div>
      </div>
    </div> -->

  <!-- <div class="emp emp3">
      <div class="box"><img src="img/team/mosha.png"alt="" data-0="height:0%; opacity:0" data-1800="height:110%;opacity:1;"></div>   
      <div class="employee_details" data-0="transform:scale(0.6); opacity:0;" data-1900="transform:scale(1); opacity:1;">
      <h2>Mr. Mosharrof</h2>
      <h3>Assistant Manager</h3>
      <h4>Quality Assurance & Audit</h4>
        <div class="social_icon">
        <a href="skype:mosharaf.hossain326?chat"><i class="fa fa-skype" aria-hidden="true" style="font-size:24px;color:rgb(0,175,240)"></i></a>
        <i class="fa fa-twitter fa-2x fa-lg" style="font-size:24px; color:#38A1F3;" ></i>
        <i class="fa fa-linkedin fa-2x fa-lg" style="font-size:24px; color: #0e76a8; "></i>
        </div>
    </div>
  </div> -->

  <!-- <div class="emp emp4">
    <div class="box"><img src="img/team/rashed.png"alt="" data-0="height:0%; opacity:0" data-2500="height:110%;opacity:1;" ></div>   
    <div class="employee_details" data-0="transform:scale(0.6); opacity:0;" data-2600="transform:scale(1); opacity:1;">
    <h2>Mr. Rashed</h2>
    <h3>Manager</h3>
    <h4>Sew Free Application & P.D</h4>
      <div class="social_icon">
      <a href="skype:rashed.o4l?chat"><i class="fa fa-skype" aria-hidden="true" style="font-size:24px;color:rgb(0,175,240)"></i></a>
      <i class="fa fa-twitter fa-2x fa-lg" style="font-size:24px; color:#38A1F3;" ></i>
      <i class="fa fa-linkedin fa-2x fa-lg" style="font-size:24px; color: #0e76a8; "></i>
      </div>
  </div>
  </div> -->

<!-- <div class="emp emp5">
  <div class="box"><img src="img/team/arif.png"alt=""data-0="height:0%; opacity:0" data-2500="height:110%;opacity:1;"> </div>   
  <div class="employee_details" data-0="transform:scale(0.6); opacity:0;" data-2600="transform:scale(1); opacity:1;">
  <h2>Mr. Arif</h2>
  <h3>Deputy Manager</h3>
  <h4>Sample, Pattern & R.D</h4>
    <div class="social_icon">
    <a href="skype:arifuzzaman.ripon1?chat"><i class="fa fa-skype" aria-hidden="true" style="font-size:24px;color:rgb(0,175,240)"></i></a>
    <i class="fa fa-twitter fa-2x fa-lg" style="font-size:24px; color:#38A1F3;" ></i>
    <i class="fa fa-linkedin fa-2x fa-lg" style="font-size:24px; color: #0e76a8; "></i>
    </div>
  </div>
</div> -->

<!-- <div class="emp emp6">
  <div class="box"><img src="img/team/sudip.jpg"alt="" data-0="height:0%; opacity:0" data-2500="height:110%;opacity:1;"> </div>   
  <div class="employee_details" data-0="transform:scale(0.6); opacity:0;" data-2600="transform:scale(1); opacity:1;">
    <h2>Mr. Sudip</h2>
    <h3>Assistant Manager</h3>
    <h4>ACCOUNTS, HR & Admin</h4>
      <div class="social_icon">
      <a href="skype:sudip.barua2?chat"><i class="fa fa-skype" aria-hidden="true" style="font-size:24px;color:rgb(0,175,240)"></i></a>
      <i class="fa fa-twitter fa-2x fa-lg" style="font-size:24px; color:#38A1F3;" ></i>
      <i class="fa fa-linkedin fa-2x fa-lg" style="font-size:24px; color: #0e76a8; "></i>
      </div>
  </div>
</div> -->
</div>
</section>
</main>

<footer id="footer">
  <?php require("include/footer.php"); ?>
</footer>
</body>
</html>