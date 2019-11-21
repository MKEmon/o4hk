<?php include('server.php') ?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phplogin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Team Member</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="dashboard_style.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<style type="text/css">
  
.form-group.required .control-label::after{
  content:"*";
  color:red;
}
.heading{
    text-align:center;
    background:gray;
    padding:20px;
    color:white;

}
</style>
<body>

     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-2">
                 <?php include 'navbar2.php' ?>
             </div>

             <div class="col-sm-10">
                <?php 
                    $employee_id = isset($_GET['edit']) ? $_GET['edit'] : '';
                    $result = $conn->query("SELECT * FROM images where id='$employee_id'") or die($conn->error);

                    while($row=$result->fetch_assoc()){
                        $emp_name = $row['name'];
                        $image = $row['file_name'];
                        $designation = $row['designation'];
                        $dept = $row['department'];
                    }
 
                ?>


                 <h1 class="text-center">Add Team Member: </h1>
                        <div class="row justify-content-center container-fluid">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
        
                            <div class="form-group required">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <label for="" class="control-label">Name: </label>
                                <input type="text" class="form-control" name="emp_name" value="<?php echo 
                                $emp_name; ?>" placeholder="Enter name of the employee">
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Designation: </label>
                                <!-- <input type="text" class="form-control" name="designation" value="" placeholder="Enter Designation"> -->
                                
                                <select name='designation' class="form-control">
                                  <?php 
                                  $result = $conn->query('SELECT post FROM designation');
                                  while ($row = $result->fetch_assoc()) {
                                    $designation = $row['post'];
                                  
                                ?>
                                  <option name = '<?php echo $designation;?>' value="<?php echo $designation;?>"><?php echo $designation; ?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Department: </label>
                                <input type="text" class="form-control" name="dept" value="<?php echo 
                                $dept; ?>" placeholder="Enter Department">
                            </div>

                            <div class="form-group required">
                              <label class="control-label">Select Image File to Upload: </label>
                              <input class="form-control" type="file" name="file"> 
                            </div>

                            <div class="form-group">

                            <?php if($update==true): ?>
                            <button type="submit" class="btn btn-info" name="team_update">Update</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                            <?php endif ?>
                            
                            
                        </form>
                        </div>
             </div>
         </div>
     </div>
        
</body>
</html>