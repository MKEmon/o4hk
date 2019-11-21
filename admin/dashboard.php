<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phplogin";

// Create connection
$db = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard_style.css">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<!-- <style type="text/css">
  td,th{
    text-align:center;
  }
</style> -->
<body>
 <div class="container-fluid">
     <div class="row">
    <div class="col-sm-2">
             <?php include 'navbar2.php' ?>
    </div>

         <div class="col-sm-10">

           <div class="header">
            <h2 class="text-center" style="font-weight:bold;">Job positions</h2>
         </div>

<?php 
    $result = $db->query("SELECT * FROM job_post") or die($db->error);
 
?>

<div class="container">
             
  <table class="table table-hover table-striped table-responsive">
    <thead>
      <tr>
        <th>Department</th>
        <th>No of Vacancy</th>
        <th>Job Location</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result ->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['no_of_post']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td>
                <a href="add_post.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                <a href="server.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                <br> 
            </td>
        </tr>
        
        <?php endwhile ?>
    </tbody>
  </table>
</div>

<div class="header">
            <h2 class="text-center" style="font-weight:bold;">Employee</h2>
         </div>

<?php 
    $result = $db->query("SELECT * FROM images") or die($db->error);
 
?>

<div class="container">
             
  <table class="table table-hover table-striped table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Designation</th>
        <th>Image</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result ->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['designation']; ?></td>
            <td><img src="<?php echo 'uploads/'.$row["file_name"]; ?>" alt="" style="height: 100px;width:100px;"/></td>
            <td>
                <a href="add_team.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                <a href="server.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                <br> 
            </td>
        </tr>
        
        <?php endwhile ?>
    </tbody>
  </table>
</div>

<!-- 
<div class="header">
    <h2 class="text-center" style="font-weight:bold;">Order Status</h2>
</div>

<?php 
    $result = $conn->query("SELECT * FROM admin_order") or die($conn->error);
 
?>

<div class="container">
             
  <table class="table table-hover table-striped table-responsive">
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Season</th>
        <th>Style Name</th>
        <th>Total Order</th>
        <!-- <th>Status</th> -->
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result ->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['client']; ?></td>
            <td><?php echo $row['season']; ?></td>
            <td><?php echo $row['style']; ?></td>  
            <td><?php echo $row['order_qty']; ?></td>
            <!-- <td><?php echo $row['status']; ?></td> -->
            <td>
                <a href="edit_admin_order.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                <br> 
            </td>
        </tr>
        
        <?php endwhile ?>
    </tbody>
  </table>
</div>

<?php require_once 'production_process.php'; ?>


<?php 
$servername = "localhost";
$username = "id10552946_o4l";
$password = "password";
$database = "id10552946_production";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $result = $conn->query("SELECT daily_update.id,daily_update.color,daily_update.line,daily_update.daily_cutting,daily_update.daily_input,daily_update.daily_output,daily_update.qc_pass,order_details.style_name FROM daily_update INNER JOIN order_details ON daily_update.style_id=order_details.style_id ORDER BY daily_update.id") or die($conn->error);
 
?>
<hr>

<div class="container">
<h1 class="text-center">Daily Production Status</h1>             
  <table class="table table-hover table-striped production_table">
    <thead>
      <tr>
        <th>Style Name</th>
        <th>Color</th>
        <th>Line no</th>
        <th>Cutting</th>
        <th>Input</th>
        <th>Output</th>
        <th>QC Pass</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result ->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['style_name']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['line']; ?></td>
            <td><?php echo $row['daily_cutting']; ?></td>
            <td><?php echo $row['daily_input']; ?></td>
            <td><?php echo $row['daily_output']; ?></td>
            <td><?php echo $row['qc_pass']; ?></td>
            <td>
                <a href="edit_production_status.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                <a href="production_process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                <br> 
            </td>
        </tr>
        
        <?php endwhile ?>
    </tbody>
  </table>
</div>
<hr> -->

 </div>
 </div> 
 <script src="script.js"></script>
</body>
</html>