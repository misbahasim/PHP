<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php

$con=mysqli_connect("localhost","root","","mis_profile");

session_start();

if(isset($_POST['btnLogin']))
{
  $uname=$_POST['txtname'];
  $pass=$_POST['txtpass'];
  
  $login =mysqli_query($con,"select * from user_contact where USER_EMAIL_ID='$uname' and USER_PASSWORD='$pass' ");
  $row=mysqli_fetch_array($login);
  if($login){

    $_SESSION['name']=$row['USER_NAME'];
    setcookie();
    header("location:homepage.php");
  }
  else{
    echo "Invalid record";
    }
}

?>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">

    <form method="post" action="login_form.php">
      <input type="text" id="login" class="fadeIn second" name="txtname" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="txtpass" placeholder="password">
      <input type="submit" name="btnLogin" class="fadeIn fourth" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="insert.php">Create new account</a>
    </div>

  </div>
</div>

</body>
</html>