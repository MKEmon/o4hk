<?php
// Include the database configuration file
$db = mysqli_connect('localhost', 'root', '', 'phplogin') or die($db->error());
$statusMsg = '';
$category = $emp_name = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	$name = $_POST['emp_name'];
	$dept = $_POST['dept'];
	$designation = $_POST['designation'];
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){

        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on,name,designation,department,category) VALUES ('".$fileName."', NOW(),'$name','$designation','$dept','$category')");
            if($insert){
                header('location: dashboard.php');
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>


<?php
$update = false;
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    
    $result = $db->query("select * from images where id='$id'") or die($conn->error());
    if(count((array)$result)==1){
        $row = $result->fetch_array();

    }
}
?>

<?php
// Include the database configuration file
$db = mysqli_connect('localhost', 'root', '', 'phplogin') or die($db->error());
$statusMsg = '';
$category = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["team_update"]) && !empty($_FILES["file"]["name"])){
    $id=$_POST['id'];
	$name = $_POST['emp_name'];
	$dept = $_POST['dept'];
	$designation = $_POST['designation'];
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){

        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("update images set file_name ='".$fileName."',uploaded_on= NOW(),name='$name',designation='$designation',department='$dept',category='$category' WHERE id='$id'");
            if($insert){
                header('location: dashboard.php');
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>