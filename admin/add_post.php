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
  <title>Vacancy</title>
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
                    $post_id = isset($_GET['edit']) ? $_GET['edit'] : '';
                    $result = $db->query("SELECT * FROM job_post where id='$post_id'") or die($db->error);

                    while($row=$result->fetch_assoc()){
                    $post = $row['no_of_post'];
                    $dept = $row['department'];
                    $location = $row['location'];
                    $position = $row['position'];
                    $experience = $row['experience'];
                    }
 
                ?>


                 <h1 class="text-center">Add Vacancy: </h1>
                        <div class="row justify-content-center container-fluid">
                        <form action="add_post.php" method="POST">


                            <div class="form-group required">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <label for="" class="control-label">Department: </label>
                                <input type="text" class="form-control" name="dept" value="<?php echo 
                                $dept; ?>" placeholder="Enter Department">
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Position: </label>
                                <input type="text" class="form-control" name="position" value="<?php echo 
                                $position; ?>" placeholder="Enter position">
                            </div>
        
                            <div class="form-group required">
                                <label for="" class="control-label">Vacant Post: </label>
                                <input type="text" class="form-control" name="post" value="<?php echo 
                                $post; ?>" placeholder="Enter number of vacant post">
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Educational Qualifications: </label>
                                <textarea class="form-control" rows="2" id="comment" name="edu_qualification"></textarea>
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Experience: </label>
                                <input type="text" class="form-control" name="experience" value="<?php echo 
                                $experience; ?>" placeholder="Enter required experience">
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Job Description: </label>
                                <textarea class="form-control" rows="5" id="comment" name="job_desc"></textarea>
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Additional Qualifications: </label>
                                <textarea class="form-control" rows="2" id="comment" name="additional_qualification"></textarea>
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Job Location: </label>
                                <input type="text" class="form-control" name="location" value="<?php echo 
                                $location; ?>" placeholder="Enter Location">
                            </div>

                            <div class="form-group required">
                                <label for="" class="control-label">Last time to apply: </label>
                                <input type="date" class="form-control" name="date">
                            </div>



                            <div class="form-group">

                            <?php if($update==true): ?>
                            <button type="submit" class="btn btn-info" name="post_update">Update</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary" name="post_submit">Submit</button>
                            </div>
                            <?php endif ?>
                            
                            
                        </form>
                        </div>
             </div>
         </div>
     </div>
        
</body>
</html>