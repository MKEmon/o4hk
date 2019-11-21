<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $title; ?>
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/logo.png') }}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  {{-- <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet"> --}}
  <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Milonga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Text+Me+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Outline&display=swap" rel="stylesheet">


  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>


  <header id="header">
    <div class="container-fluid">

      <div id="logo">
        <h1><a href="/" class="scrollto"><img src="img/layout/transparent_logo.png" height="30" width="30" style="margin: -5px 10px 0px 0px;">O4HK LTD</a></h1>
        <i>we bridge the gap</i>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about_us">About Us</a></li>
          <li class="menu-has-children"><a href="/services">Scope Of Services</a>
            <ul class="dropdown-content">
                <li><a href="development">Development</a></li>
                <li><a href="sourcing">Sourcing</a></li>
                <li><a href="manufacturing">Manufacturing</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="/portfolio">Partners</a>
            <ul class="dropdown-content">
              <li><a href="backcountry">Backcountry</a></li>
              <li><a href="didriksons">Didriksons</a></li>
              <li><a href="halti">Halti</a></li>
              <li><a href="maier">Maier Sports</a></li>
              <li><a href="mosko">Mosko Moto</a></li>
              <li><a href="trew">TREW Gear</a></li>
            </ul>
          </li>
          <li><a href="/team">Team</a></li>
          <li><a href="/contact_us">Contact</a></li>
          <li><a href="/career">Career</a></li>
          </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
