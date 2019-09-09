<?php
  // Create database connection
  $db = mysql_connect("localhost", "root", "");
  mysql_select_db("mis_profile");

if (isset($_GET['upload'])) 
  {
    $id=$_GET['upload'];
    $result = mysql_query("SELECT * FROM upload_image where id=$id",$db);
    $info = mysql_query("SELECT * FROM tbladmin where id=$id");
  }

  if(isset($_POST['btnUpdate'])){

      $status=$_POST['txtStatus'];
      $id=$_POST['id'];

      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];

      mysql_query("update upload_image set image='$file_name', image_text='$status' where id=$id ");
      
      if(move_uploaded_file($file_tmp,"upload/".$file_name)){
         $result = mysql_query("SELECT * FROM upload_image where id=$id",$db);

      }else{
         print_r($errors);
      }
   }

   $display=mysql_query("select * from tbladmin a, upload_image b where a.id=b.id");

?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <a href="homepage.php">Back</a>
  <div class="row">
    <div class="col-md-6 img">
        <?php
          $row = mysql_fetch_array($result);
              echo "<img src='upload/".$row['image']."' alt='' class='img-rounded' width=200px height=200px>"; ?>
              <div class="panel panel-success">
        <div class="panel-body">
          Status: <?php echo $row['image_text'] ?>
        </div>
      </div>
              <!-- echo "<div class='well well-large'> 
              Status: ".$row['image_text']."
              </div>"; -->
        
    </div>
    <?php $show = mysql_fetch_array($info); ?>
    <div class="col-md-4 details">
      <blockquote>
        <h5><?php echo ($show[1]." ".$show[2]);  ?></h5>
        <small><cite title="Source Title"><?php echo ($show[6]);  ?><i class="icon-map-marker"></i></cite></small>
      </blockquote>
        <p>
          <?php echo ($show[3]);  ?> <br>
          <?php echo ($show[5]);  ?> <br>
          <?php echo ($show[7]);  ?> <br>
          <?php echo ($show[8]);  ?>
        </p>
    </div>
    
</div>

<form method="post" action="profile.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row[0] ?>">
  <input type="file" name="image">
  <div>
      <textarea id="text" cols="40" rows="2" name="txtStatus" 
        placeholder="Upload status"></textarea>
    </div>
  <input type="submit" name="btnUpdate" value="Update">
</form> 

</body>
</html>




