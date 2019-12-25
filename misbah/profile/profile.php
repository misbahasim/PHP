<?php
  // Create database connection
  $con=mysqli_connect("localhost","root","","mis_profile");

if (isset($_GET['upload'])) 
  {
    $id=$_GET['upload'];
    $result = mysqli_query($con,"SELECT * FROM user_contact where USER_ID=$id");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<?php  $row = mysqli_fetch_array($result); ?>
<a class="btn" href="homepage.php">Back</a>
<div class="container well col-md-4">
  <div class="row">
        <div class="span2" >
          <img src="upload/<?php echo $row['USER_IMAGE']; ?>" class="img-circle"width=200px height=200px>
        </div>
        
        <div class="span8">
            <h3>Name: <?php echo $row[1] ;?></h3>
            <h6>Email: <?php echo $row[2] ;?></h6>
            <h6>Password: <?php echo $row[3] ;?></h6>
            <h6>Role: <?php echo $row[5] ;?></h6>
        </div>
        
        <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Action 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                    <li><a href="#"><span class="icon-trash"></span> Delete</a></li>
                </ul>
            </div>
        </div>
</div>
</div>

</body>
</html>