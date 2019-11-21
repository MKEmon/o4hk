<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$post = $dept = $location = $position = $experience = '';
$update = 0;
$errors = array(); 
$emp_name = $dept = '';

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'phplogin');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM accounts WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO accounts (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

if (isset($_POST['post_submit'])) {
	$post = mysqli_real_escape_string($db,$_POST['post']);
	$dept = mysqli_real_escape_string($db,$_POST['dept']);
  $location = mysqli_real_escape_string($db,$_POST['location']);
  $position = mysqli_real_escape_string($db,$_POST['position']);
  $edu_qualificaton = mysqli_real_escape_string($db,$_POST['edu_qualification']);
  $experience = mysqli_real_escape_string($db,$_POST['experience']);
  $job_desc = mysqli_real_escape_string($db,$_POST['job_desc']);
  $additional_qualification = mysqli_real_escape_string($db,$_POST['additional_qualification']);
  $date = $_POST['date'];

	if (empty($post)) { array_push($errors, "Post is required"); }
  	if (empty($dept)) { array_push($errors, "Department is required"); }
    if (empty($location)) { array_push($errors, "Location is required"); }
    if (empty($position)) { array_push($errors, "Position is required"); }
    if (empty($edu_qualificaton)) { array_push($errors, "Educational Qualification is required"); }
    if (empty($job_desc)) { array_push($errors, "Job Description is required"); }
    if (empty($additional_qualification)) { array_push($errors, "Additional Qualification is required"); }

	
	else{
		$_SESSION['SuccessMessage'] = "Vacancy notice uploaded successfully";
		$sql = "insert into job_post(no_of_post,department,location,position,edu_qualification,experience,job_desc,additional_qualification,date) values('$post','$dept','$location','$position','$edu_qualificaton','$experience','$job_desc','$additional_qualification','$date')" or die(mysqli_error($db));
		$result = $db -> query($sql);

		// Redirect_to("add_partners.php");
		header("Location:dashboard.php");
		exit;
}
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    
    $result = $db->query("select * from job_post where id=$id") or die($conn->error());
    if(count((array)$result)==1){
        $row = $result->fetch_array();

    }
}

if (isset($_POST['post_update'])) {
	$id = $_POST['id'];
	$post = mysqli_real_escape_string($db,$_POST['post']);
	$dept = mysqli_real_escape_string($db,$_POST['dept']);
  $location = mysqli_real_escape_string($db,$_POST['location']);
  $position = mysqli_real_escape_string($db,$_POST['position']);
  $edu_qualificaton = mysqli_real_escape_string($db,$_POST['edu_qualification']);
  $experience = mysqli_real_escape_string($db,$_POST['experience']);
  $job_desc = mysqli_real_escape_string($db,$_POST['job_desc']);
  $additional_qualification = mysqli_real_escape_string($db,$_POST['additional_qualification']);
  $date = $_POST['date'];

	if (empty($post)) { array_push($errors, "Post is required"); }
  	if (empty($dept)) { array_push($errors, "Department is required"); }
    if (empty($location)) { array_push($errors, "Location is required"); }
    if (empty($position)) { array_push($errors, "Position is required"); }
    if (empty($edu_qualificaton)) { array_push($errors, "Educational Qualification is required"); }
    if (empty($job_desc)) { array_push($errors, "Job Description is required"); }
    if (empty($additional_qualification)) { array_push($errors, "Additional Qualification is required"); }
	
	else{	
		$result = $db->query("UPDATE job_post SET no_of_post = '$post', department = '$dept',location = '$location',position ='$position',edu_qualification='$edu_qualificaton',experience='$experience',job_desc='$job_desc',additional_qualification='$additional_qualification',date='$date'  where id='$id'");

		// Redirect_to("add_partners.php");
		header('location: dashboard.php');
		exit;
}
}
//Deleting Job Vacancy Notice
if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $db -> query("delete from job_post where id='$id'") or die($db->error());


    header('location: dashboard.php');
}
//Deleting Employee from Database
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $db -> query("delete from images where id='$id'") or die ($db->error());
  header('location: dashboard.php');
}


?>