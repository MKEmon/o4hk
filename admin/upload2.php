<?php
// Include the database configuration file
$db = mysqli_connect('localhost', 'root', '', 'phplogin') or die($db->error());
$statusMsg = '';
$category = $emp_name = '';

// File upload path
// $targetDir = "uploads/";
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"])){
    // $newFileName = $_POST['file'];

    // if(empty($_POST['file']))
    // {
    //     $newFileName = "temporary";
    // }
    // else
    // {
    //     $newFileName = strtolower(str_replace(' ','-',$newFileName));
    // }
	$name = $_POST['emp_name'];
	$dept = $_POST['dept'];
    $designation = $_POST['designation'];
    
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['temp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.',$fileName);
    $fileActExt = strtolower(end($fileExt));

    $allowed = array("jpg","jpeg","png","pdf");

    if(in_array($fileActExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize<2048)
            {
                $imageName = $fileName . "." . $fileActExt;
                $fileDest = "img/uploads/" . $imageName;
                if(empty($name)||empty($dept)||empty($designation))
                {
                    header('Location:'); 
                    exit
                }
                else{
                    $sql = "SELECT * FROM images";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql))
                    {
                        echo 'SQL statement failed!';
                    }
                    else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;


                        $sql = "INSERT INTO images (file_name, uploaded_on,name,designation,department,category) VALUES (?,?,?,?,?,?)";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql))
                        {
                            echo 'SQL statement failed!';
                        }
                        else{
                            mysqli_stmt_bind_param($stmt,"ssss",);
                        }
                    }
                }
            }
            else{
                echo 'File size is too big.';
                exit();
            }
        }
        else{
            echo 'There is an error'
        }
    }
    else{
        echo 'File Type not supported. Please use jpg or png files';
        exit();
    }






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