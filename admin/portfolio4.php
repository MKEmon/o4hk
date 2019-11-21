<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$title = "October4 ltd";

require("include/head.php");
?>
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">

</head>


<style>


::-webkit-scrollbar {
  width: px; // to adjust width
}

::-webkit-scrollbar-track {
  background: #FFFFFF;
  -webkit-box-shadow: inset 1px 1px 2px #E0E0E0;
  border: 1px solid #D8D8D8; //color of the track of scroll bar
}

::-webkit-scrollbar-thumb {
  background: #646464;
  -webkit-box-shadow: inset 1px 1px 2px rgba(155, 155, 155, 0.4);
}

::-webkit-scrollbar-thumb:hover {
  background: #aaaaaa;
}

::-webkit-scrollbar-thumb:active {
  background: #888;
  -webkit-box-shadow: inset 1px 1px 2px rgba(0, 0, 0, 0.3);
}

body {
  background: #f5f5f5;
  color: #666;
}

section {
  position: relative;
  display: block;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  color: #BBB;
}

section h2 {
  color: #FFF;
}

section .cover {
  position: absolute;
  display: block;
  width: 100%;
  z-index: 1;
}

section .cover img {
  position: absolute;
  display: block;
  min-width: 100%;
  min-height: 100%;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

section .content {
  position: absolute;
  display: block;
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  z-index: 2;
}

section .text {
  width: 50%;
}

.centralize {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translateZ(0px) translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

@media screen and (max-width: 1000px) {
  section .text {
    width: 90%;
  }
}
a.iprodev {
	line-height: normal;
	font-family: Varela Round, sans-serif;
	font-weight: 600;
	text-decoration: none;
	font-size: 13px;
	color: #A7AAAE;
	position: fixed;
	left: 20px;
	bottom: 20px;
	border: 1px solid #A7AAAE;
	padding: 12px 20px 10px;
	border-radius: 50px;
	transition: all .1s ease-in-out;
	text-transform: uppercase;
  z-index: 100;
}

a.iprodev:hover {
	background: #A7AAAE;
	color: white;
}
</style>
<body>
  <?php $page = "portfolio";require("include/navbar.php"); ?>
  
<main id="main">
  <!--==========================
    Portfolio Section
  ============================-->
  <section id="portfolio"  class="section-bg">


      <header class="section-header">
        <h3 class="section-title">Our Partners</h3>
      </header>

      <section class="special" data-scrollax-parent="true">
  <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="//iprodev.github.io/Scrollax.js/images/photo-1429277005502-eed8e872fe52.jpg" /></div>
  <div class="content">
    <div class="text centralize">
      <div data-scrollax="properties: { 'translateY': '150%', 'opacity': 1.5 }">
        <header class="major">
          <h2>Aliquam fringilla, lectus vitae malesuada.</h2>
        </header>
        <p>Sed nunc dui, laoreet et fringilla nec, aliquam sit amet dolor. Cras faucibus, justo vel ullamcorper accumsan, elit nibh tempus dui, eget tincidunt ante dolor eget nisi. Morbi at viverra eros. Nulla sed dui dui. Ut gravida euismod dolor vitae.</p>
      </div>
    </div>
  </div>
</section>
<section class="special" data-scrollax-parent="true">
  <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="//iprodev.github.io/Scrollax.js/images/OnRKhvlFQ2uJNSx5O3cc_DSC00560.jpg" /></div>
  <div class="content">
    <div class="text centralize">
      <div data-scrollax="properties: { 'translateY': '150%', 'opacity': 1.5 }">
        <header class="major">
          <h2>Lorem ipsum dolor sit amet.</h2>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent est turpis, aliquam quis molestie in, imperdiet a urna. Maecenas vel condimentum enim, eget tempor lectus. Vivamus ut nisi in enim vestibulum aliquam at quis nunc. Suspendisse ac erat eu.</p>
      </div>
    </div>
  </div>
</section>
<section class="special" data-scrollax-parent="true">
  <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="//iprodev.github.io/Scrollax.js/images/photo-1429277158984-614d155e0017.jpg" /></div>
  <div class="content">
    <div class="text centralize">
      <div data-scrollax="properties: { 'translateY': '150%', 'opacity': 1.5 }">
        <header class="major">
          <h2>Sed hendrerit lobortis dui. Donec.</h2>
        </header>
        <p>Duis efficitur ex non lectus congue, laoreet condimentum neque ullamcorper. Phasellus mauris turpis, convallis vel posuere sed, imperdiet commodo ligula. In eget consectetur velit. Sed eget arcu eget risus semper placerat. Aliquam aliquet erat augue, non scelerisque augue rhoncus vitae.</p>
      </div>
    </div>
  </div>
</section>
<section class="special" data-scrollax-parent="true">
  <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="//iprodev.github.io/Scrollax.js/images/photo-1429277096327-11ee3b761c93.jpg" /></div>
  <div class="content">
    <div class="text centralize">
      <div data-scrollax="properties: { 'translateY': '150%', 'opacity': 1.5 }">
        <header class="major">
          <h2>Vestibulum elementum purus quis justo.</h2>
        </header>
        <p>Quisque interdum convallis lacus ut auctor. Nunc venenatis elit non nulla gravida, congue fringilla justo ultrices. Morbi ut dolor fringilla, mollis ante imperdiet, euismod sem. Sed faucibus auctor ligula vel accumsan. Integer ultrices feugiat faucibus. Suspendisse hendrerit urna vulputate, accumsan.</p>
      </div>
    </div>
  </div>
</section>
<a class='iprodev' href='http://iprodev.com' target='_blank'>iprodev.com</a>

<!-- #portfolio -->
    </section>
</main>
<footer id="footer">
  <?php require("include/footer.php"); ?>
 </footer>

 <script src="https://iprodev.github.io/Scrollax.js/assets/js/jquery.min.js"></script>
 <script src="https://iprodev.github.io/Scrollax.js/assets/js/smoothscroll.js"></script>
 <script src="https://iprodev.github.io/Scrollax.js/lib/scrollax.min.js"></script>
 <script>
 jQuery(document).ready(function($){
  'use strict';

  $.Scrollax();
});
 </script>
</body>
</html>
