<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php

$con=mysql_connect('localhost','root','');
$db="mis_profile";
$my_db=mysql_select_db($db, $con);

session_start();
if(isset($_POST['btnLogin']))
{
  $uname=$_POST['txtname'];
  $pass=$_POST['txtpass'];
  
  $login =mysql_query("select * from tbladmin where username='$uname' and password='$pass' ",$con);
  if($login){

    $_SESSION['name']=$uname;
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