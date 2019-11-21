<h1 class="text-center">Dashboard</h1>
             <ul class="nav nav-pills nav-stacked text-center" id="side-menu">
             	<li <?php if (stripos($_SERVER['REQUEST_URI'],'index') !== false) {echo 'class="active"';} ?> ><a href="#"><span class=""></span> Main Page</a></li>
                 <li <?php if (stripos($_SERVER['REQUEST_URI'],'dashboard') !== false) {echo 'class="active"';} ?>><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                 <li <?php if (stripos($_SERVER['REQUEST_URI'],'add_post') !== false) {echo 'class="active"';} ?>><a href="add_post.php"><span class="glyphicon glyphicon-plus"></span> Job</a></li>

                 <li <?php if (stripos($_SERVER['REQUEST_URI'],'add_team') !== false) {echo 'class="active"';} ?>><a href="add_team.php"><span class="glyphicon glyphicon-plus"></span> Add New Team Member</a></li>

             </ul>


             