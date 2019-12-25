<?php

$con=mysqli_connect("localhost","root","","mis_profile");

$form_btn;
if(isset($_GET['edit']))
{
	$form_btn="Update";
	$id=$_GET['edit'];
	$sql_display=mysqli_query($con,"select * from user_contact where USER_ID=$id");
	$row=mysqli_fetch_array($sql_display);	
	$uid=$row['USER_ID'];
	$uname=$row['USER_NAME'];
	$uemail=$row['USER_EMAIL_ID'];
	$upass=$row['USER_PASSWORD'];
	$uimg = $row['USER_IMAGE'];
}
else
{
	$form_btn="Insert";
	$uid="";
	$uname="";
	$uemail="";
	$upass="";
	$uimg = "";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body>


<div class="container">
	<a class="btn" href="homepage.php">Back</a>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center"><?php echo $form_btn;?></h4>
	<form method="post" action="#" enctype="multipart/form-data">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		 <input name="txtid" value="<?php echo $uid;?>" type="hidden">
        <input name="txtname" class="form-control" value="<?php echo $uname;?>" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="txtemail" value="<?php echo $uemail;?>" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="txtpass" class="form-control" value="<?php echo $upass;?>" placeholder="Create password" type="text">
    </div> <!-- form-group// -->   
    <div class="form-group input-group">
    	<img src="upload/<?php echo $uimg; ?>" height=100px width=100px; alt="no image to show">
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-images"></i> </span>
		 </div>
    	<input name="image" class="form-control" type="file">
    </div> <!-- form-group// -->
                                   
    <div class="form-group">
        <input name="btnupd" type="submit" value="<?php echo $form_btn;?>" class="btn btn-primary btn-block">
    </div> <!-- form-group// -->                                                                       
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//--> 

</body>
</html>
<?php
if(isset($_POST['btnupd']))
{

  $id=$_POST['txtid'];
  $name=$_POST['txtname'];
  $email=$_POST['txtemail'];
  $pass=$_POST['txtpass'];
  $file_name = $_FILES['image']['name'];
  $file_tmp =$_FILES['image']['tmp_name'];

	if($id=="")
	{
		$insert=mysqli_query($con,"INSERT INTO `user_contact`(`USER_NAME`, `USER_EMAIL_ID`, `USER_PASSWORD`, `USER_IMAGE`) VALUES ('$name','$email','$pass','$file_name')");
		move_uploaded_file($file_tmp,"upload/".$file_name);
		if ($insert) 
		{
			echo "<script>alert('inserted');</script>";  
		}
	    else
	    {
	  		echo "<script>alert('Not inserted');</script>";  
	  	}
	}
	else
	{
		$upd_img;

	  if(empty($file_name))
	  {
	  	$upd_img="UPDATE `user_contact` SET `USER_NAME`='$name',`USER_EMAIL_ID`='$email',`USER_PASSWORD`='$pass' WHERE `USER_ID`=$id";
	  }
	  else
	  {
	  	move_uploaded_file($file_tmp,"upload/".$file_name);
	  	$upd_img="UPDATE `user_contact` SET `USER_NAME`='$name',`USER_EMAIL_ID`='$email',`USER_PASSWORD`='$pass',`USER_IMAGE`='$file_name' WHERE `USER_ID`=$id";
	  }
	  
	    $query= mysqli_query($con,$upd_img);
		if ($query) 
		{
			echo "<script>alert('updated');</script>";  
		}
	    else
	    {
	  		echo "<script>alert('Not updated');</script>";  
	  	}
	}

}

?>


