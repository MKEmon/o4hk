<header id="header">
    <div class="container-fluid">

      <div id="logo">
        <h1><a href="index.php" class="scrollto"><img src="img/layout/transparent_logo.png" height="30" width="30" style="margin: -5px 10px 0px 0px;">O4HK LTD</a></h1>
        <i>we bridge the gap</i>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="nav-item" <?php if (stripos($_SERVER['REQUEST_URI'],'index.php') !== false) {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
          <li class="nav-item" <?php if (stripos($_SERVER['REQUEST_URI'],'about_us.php') !== false) {echo 'class="active"';} ?>><a href="about_us.php">About Us</a></li>
          <li class="menu-has-children nav-item" <?php if (stripos($_SERVER['REQUEST_URI'],'services.php') !== false) {echo 'class="active"';} ?>><a href="services.php">Scope Of Services</a>
            <ul class="dropdown-content">
                <li><a href="development.php">Development</a></li>
                <li><a href="sourcing.php">Sourcing</a></li>
                <li><a href="manufacturing.php">Manufacturing</a></li>
            </ul>
          </li>
          <li class="menu-has-children nav-item" <?php if (stripos($_SERVER['REQUEST_URI'],'portfolio.php') !== false) {echo 'class="active"';} ?>><a href="portfolio.php">Partners</a>
            <ul class="dropdown-content nav-item">
              <li ><a href="backcountry.php">Backcountry</a></li>
              <li><a href="didriksons.php">Didriksons</a></li>
              <li><a href="halti.php">Halti</a></li>
              <li><a href="maier.php">Maier Sports</a></li>
              <li><a href="mosko.php">Mosko Moto</a></li>
              <li><a href="trew.php">TREW Gear</a></li>
            </ul>
          </li>
          <li class="nav-item" <?php if (stripos($_SERVER['REQUEST_URI'],'team.php') !== false) {echo 'class="active"';} ?>><a href="team.php">Team</a></li>
          <li class="nav-item" <?php if (stripos($_SERVER['REQUEST_URI'],'contact_us.php') !== false) {echo 'class="active"';} ?>><a href="contact_us.php">Contact</a></li>
          <li class="nav-item" <?php if (stripos($_SERVER['REQUEST_URI'],'career.php') !== false) {echo 'class="active"';} ?>><a href="career.php">Career</a></li>
          </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
