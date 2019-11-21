<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "October4 ltd";
require("include/head.php");
?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>
body{
    overflow-x:hidden;
}
.spacer{
    min-height:30rem;
}

.header_img{
  background-image: url('img/services/manufacturing/line/ln2.jpg');
  position: relative;
  min-width: 100%; 
  min-height: 100vh;
  background-size: cover;
  }
.header_img::before{
  position: absolute;
        content: '';
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(80, 80, 80, 0.5);
        min-width: 100%;
        min-height:100vh;
} 
.content {
  position: absolute;
  bottom: 20%;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  padding: 50px;
}
.counter_sys span{
    font-size:24px;
}
.counter_sys p{
    font-size:24px;
}

#manufacturing{
  margin: 20px auto;
}
#manufacturing2{
  margin:100px auto 0px;
}
#manufacturing .heading{
  text-align:center;
}
.gallery{
		display: grid;
		grid-template-columns: repeat(2,1fr);
    grid-template-rows: 300px 350px 350px;
    grid-gap: 20px;
    margin:20px;
	}
  .description{
    text-align: center;
  }
	.gallery__img,.gallery2__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
	.gallery__item--1{
		grid-column-start: 1;
		grid-column-end:2;
		grid-row-start: 1;
		grid-row-end:2;
		position: relative;
	}
	.gallery__item p,.gallery2__item p,.gallery3__item p{
		position: absolute;
		bottom: 0;
		left: 0;
		background-color: rgba(240,240,240,0.9);
		padding:10px;
		margin:0;
		height: auto;
		display: none;
		font-size: 16px;
		font-weight: 400;
		text-align: justify;
		font-family: "open-sans",sans-serif;
	}
	.gallery__item:hover>p,.gallery2__item:hover>p,.gallery3__item:hover>p{
		display: block;
	}
	.gallery__item--2{
		grid-column-start: 2;
		grid-column-end: 3;
		grid-row-start: 1;
		grid-row-end:3;
		position: relative;
	}
	.gallery__item--3 {
    grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 2;
    grid-row-end: 3;
}
.gallery__item--4 {
    grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 3;
    grid-row-end: 4;
}
.gallery__item--5 {
    grid-column-start: 2;
    grid-column-end: 3;
    grid-row-start: 3;
    grid-row-end: 4;
    align-self: center;
    justify-self:center;
}

.gallery2{
		display: grid;
		grid-template-columns: 40% 55%;
    grid-template-rows: 300px 350px 300px;
    grid-gap: 20px;
    margin:20px;
	}
	@media only screen and (max-width:900px) {
  /* For tablets: */
  	.gallery2{
  		display: block;
  	}
  	.gallery2__item p{
		padding:0;
		margin:0;
		font-size: 14px;
	}
  }
	.gallery2__img {
    width: 100%;
    height: 100%;
    object-fit: cover;

}
	.gallery2__item--1{
		grid-column-start: 1;
		grid-column-end:2;
		grid-row-start: 1;
		grid-row-end:2;
		position: relative;
	}
	.gallery2__item--2{
		grid-column-start: 2;
		grid-column-end: 3;
		grid-row-start: 1;
		grid-row-end:3;
		position: relative;
	}
	.gallery2__item--3 {
    grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 2;
    grid-row-end: 3;
}
.gallery2__item--4 {
    grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 3;
    grid-row-end: 4;
}
.gallery2__item--6{
  grid-column-start: 2;
    grid-column-end: 3;
    grid-row-start: 3;
    grid-row-end: 4;
    align-self: center;
    justify-self:center; 
}
.gallery3{
		display: grid;
		grid-template-columns: 25% 45% 30%;
		/*grid-template-rows: 400px 200px 400px 400px;*/
    grid-gap:20px;
    margin:40px;
	}
	@media only screen and (max-width:900px) {
  /* For tablets: */
  	.gallery3{
  		display: block;
  	}
  	.gallery3__item p{
		padding:0;
		margin:0;
		font-size: 14px;
	}
  }
	.gallery3__img {
    width: 100%;
    height: auto;
    background-size: cover;
}
	.gallery3__item--1{
		grid-column-start: 1;
		grid-column-end:2;
		grid-row-start: 1;
		grid-row-end:2;
		position: relative;
      justify-self:center;
      align-self: center;
	}
	.gallery3__item p{
		position: absolute;
		bottom: 0;
		left: 0;
		background-color: rgba(240,240,240,0.9);
		padding:10px;
		margin:0;
		height: auto;
		display: none;
		font-size: 16px;
		font-weight: 400;
		text-align: justify;
		font-family: "open-sans",sans-serif;
	}
	.gallery3__item:hover>p{
		display: block;
	}
	.gallery3__item--2{
		grid-column-start: 2;
		grid-column-end: 3;
		grid-row-start: 1;
		grid-row-end:2;
		position: relative;
    justify-self:center;
    align-self: center;
	}
	.gallery3__item--3 {
    grid-column-start: 3;
    grid-column-end: 4;
    grid-row-start: 1;
    grid-row-end: 2;
    justify-self:center;
    align-self: center;
}
.gallery2__item--4 {
    grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 2;
    grid-row-end: 3;
}
.gallery3__item--5 {
    grid-column-start: 2;
    grid-column-end: 4;
    grid-row-start: 2;
    grid-row-end: 3;
}
.gallery3__item--6{
  grid-column-start: 1;
    grid-column-end: 2;
    grid-row-start: 3;
    grid-row-end: 4; 
    justify-self:center;
    align-self: center;
}
.gallery3__item--7{
  grid-column-start: 2;
    grid-column-end: 3;
    grid-row-start: 3;
    grid-row-end: 4; 
    justify-self:center;
    align-self: center;
}
.gallery3__item--8{
  grid-column-start: 3;
    grid-column-end: 4;
    grid-row-start: 3;
    grid-row-end: 4; 
    justify-self:center;
    align-self: center;
}
@media(max-width: 800px){
	.line_details .cardd{
		display: block;
	}
  #myVideo {
  position: relative;
  min-width: 100%; 
  min-height: 100%;
  background-size: cover;
}
  .line_details #video{
    display: block;
  }
  .content {
  position: absolute;
  bottom: 50px;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  padding:0px;
}
.counter_sys span{
    font-size:16px;
}
.counter_sys p{
    font-size:16px;
}
#video .video{
  margin-top:20px;
  width: 100%;
}
}
#video{
  margin:10px 0px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap:10px;
}
#video .video{
  margin-top:20px;
  width: 100%;
}
</style>
<body>
  <?php $page ='manufacturing'; require("include/navbar.php"); ?>
<main id="main">

<!--==========================
  Services Section
============================-->
<header class="section-header">
          <h3>Manufacturing</h3>
</header>

<div class="header_img">
  <div class="content">
    <div class="container">
        <div class="row counters">
   
               <div class="col-lg-4 col-6 text-center smooth-scroll counter_sys">
                   <a href="#technical">
                       <span data-toggle="counter-up">22</span><br>
                       <i>Line</i>
                       <hr>
                       <p>Technical Outerwear</p>
                   </a>
               </div>
   
               <div class="col-lg-4 col-6 text-center smooth-scroll counter_sys">
                   <a href="#life_style">
                       <span data-toggle="counter-up">6</span><br>
                       <i>Line</i><hr>
                       <p>Life Style products</p>
                   </a>
               </div>
   
               <div class="col-lg-4 col-6 text-center smooth-scroll counter_sys">
                   <a href="#knit">
                       <span data-toggle="counter-up">4</span><br>
                       <i>Line</i><hr>
                       <p>Knit</p>
                   </a>
               </div>
   
           </div>
       </div>
</div>
</div>


<section id="manufacturing">
  <header class="section-header">
    <h3 style="padding: 10px;">Manufacturing Unit</h3>
</header>
  <p class="description">We run our production at 5 factories in Bangladesh. Currently we fulfill the requirements of our customers using 32 production lines.  </p>
</section>


<section id="grid"> 
  <div class="gallery">
    <figure class="gallery__item gallery__item--1">
      <img src="img/services/manufacturing/1.jpg" class="gallery__img" alt="Image img/" data-aos="fade-up">
      <p></p>
    </figure>
    <figure class="gallery__item gallery__item--2">
      <img src="img/services/manufacturing/2.jpg" class="gallery__img" alt="Image 2" data-aos="fade-up">
      <p></p>
    </figure>
    <figure class="gallery__item gallery__item--3">
      <img src="img/services/manufacturing/3.jpg" class="gallery__img" alt="Image 3" data-aos="fade-up">
    </figure>
    <figure class="gallery__item gallery__item--4">
      <img src="img/services/manufacturing/4.jpg" class="gallery__img" alt="Image 4" data-aos="fade-up">
    </figure> 
    <figure class="gallery__item gallery__item--5">
      <iframe width="513" height="260" class="video" src="https://www.youtube.com/embed/R4Ua6mBERIg?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
    </figure>
  </div>
</section>

<section id="manufacturing">
    <header class="section-header">
        <h3 style="padding: 10px;">Production</h3>
    </header>
</section>

<section> 
  <div class="gallery2">
    <figure class="gallery2__item gallery2__item--1">
      <img src="img/services/manufacturing/11.jpg" class="gallery2__img" alt="Image 1">
      <p></p>
    </figure>
    <figure class="gallery2__item gallery2__item--2">
      <img src="img/services/manufacturing/12.jpg" class="gallery2__img" alt="Image 2">
      <p></p>
    </figure>
    <figure class="gallery2__item gallery2__item--3">
      <img src="img/services/manufacturing/13.jpg" class="gallery2__img" alt="Image 3">
    </figure>
    <figure class="gallery2__item gallery2__item--6">
      <img src="img/services/manufacturing/15.jpg" class="gallery2__img" alt="Image 5">
    </figure>
    <figure class="gallery2__item gallery2__item--5">
      <iframe class="gallery2__img" src="https://www.youtube.com/embed/R4Ua6mBERIg?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
    </figure>
  </div>
</section>


<section id="manufacturing2">
    <header class="section-header">
        <h3 style="padding: 10px;">Sew Free</h3>
    </header>
</section>

<section> 
  <div class="gallery3">
    <figure class="gallery3__item gallery3__item--1">
      <img src="img/services/manufacturing/222.png" class="gallery3__img" alt="Image 1">
      <p></p>
    </figure>
    <figure class="gallery3__item gallery3__item--2">
      <img src="img/services/manufacturing/111.jpg" class="gallery3__img" alt="Image 2">
      <p></p>
    </figure>
    <figure class="gallery3__item gallery3__item--3">
      <img src="img/services/manufacturing/333.jpg" class="gallery3__img" alt="Image 3" style="height: 350px;">
    </figure>
    <figure class="gallery3__item gallery3__item--4">
      <img src="img/services/manufacturing/444.jpg" class="gallery3__img" alt="Image 4" style="height: 400px;">
    </figure>
    <figure class="gallery3__item gallery3__item--5">
      <img src="img/services/manufacturing/555.jpg" class="gallery3__img" alt="Image 5" style="height: 400px;">
    </figure>
    <figure class="gallery3__item gallery3__item--6">
      <img src="img/services/manufacturing/777.jpg" class="gallery3__img" alt="Image 5" style="height: 300px;">
    </figure>
    <figure class="gallery3__item gallery3__item--7">
      <img src="img/services/manufacturing/888.jpg" class="gallery3__img" alt="Image 5">
    </figure>
    <figure class="gallery3__item gallery3__item--8">
      <img src="img/services/manufacturing/999.jpg" class="gallery3__img" alt="Image 5">
    </figure>
  </div>
</section>

<footer id="footer">
  <?php require("include/footer.php"); ?>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
  	offset:200,
  	duration:1500
  });
</script>
</main>
</body>
</html>