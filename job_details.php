<?php
$db = mysqli_connect('localhost', 'root', '', 'phplogin');

$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : '';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  
  <style>
      body{
        /* background-image: linear-gradient( 179.6deg,  rgba(0,19,26,1) -4.9%, rgba(0,77,105,1) 108.4% ); */
      }
      /* p,h1,h2,h3,h4,h5,h6,b,strong,li{
          color:white;
      } */
  </style>
  <body>
      <div class="container">
            <table class="table table-striped" border="2">
                <?php
                    $query = "SELECT * FROM job_post WHERE id='$post_id' ";
                    $result = mysqli_query($db,$query);
                    while($row = $result->fetch_assoc()){
                        $position = $row['position'];
                        $location = $row['location'];
                        $department = $row['department'];
                        $edu_qualification = $row['edu_qualification'];
                        $experience = $row['experience'];
                        $job_desc_list = $row['job_desc'];
                        $additional_qualification = $row['additional_qualification'];
                        $date = $row['date'];

                    }
                ?>
                <tr>
                    <td colspan="2"><p><h5><strong> Company Name & Introduction: </strong> Hong Kong based Garments & Buying House for dedicated services to European and Scandinavian brand.</h5></p></td>
                </tr>
                <tr>
                    <td><strong>Position: </strong></td>
                    <td><strong><?php echo $position?></strong> - <?php echo $department; ?></td>
                </tr>
                <tr>
                    <td><strong>Educational Qualifications:  </strong></td>
                    <td><p><b><?php echo $edu_qualification;?></b></p>
                    <p>The candidate, who does not have the skills on fluent English both in Reading & Writing need not apply.</p>
                </td>
                </tr>
                <tr>
                    <td><strong>Experience: </strong></td>
                    <td><b><?php echo $experience; ?></b></td>
                </tr>
                <tr>
                    <td><strong>Job Description: </strong></td>
                    <td><p>The candidates must have the qualities of-</p>
                    <?php $list = $job_desc_list;
                    $list = explode(',', $list);
                    foreach($list as $item){
                    ?>
                    <ul>
                        <li><?php echo $item; ?></li>
                    </ul>
                    <?php }?>
                </td>
                </tr>
                <tr>
                    <td><strong>Additional Qualifications:</strong> </td>
                    <td><p><?php echo $additional_qualification; ?></p>
                    <p>
                        Also good command in MS Office & reporting.
                    </p>
                    </td>
                </tr>
                <tr>
                        <td><strong>Job Nature: </strong></td>
                        <td>
                            <p>Full time</p>
                        </td>
                </tr>

                <tr>
                        <td><strong>Job Location: </strong></td>
                        <td>
                            <p><?php echo $location; ?></p>
                        </td>
                </tr>

                <tr>
                        <td><strong>Last time to apply: </strong></td>
                        <td>
                            <p><?php echo $date;?></p>
                        </td>
                </tr>
                <tr>
                    <td><strong>Mailing Address: </strong></td>
                    <td>dirhan.hrm@october4world.com  <br>or <a href="mailto:dirhan.hrm@october4world.com" target="_top" style="color:white;"><button class="btn btn-primary btn-sm">Click here to apply</button></a></td>
                </tr>

            </table>

    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>