<?php 
session_start();
session_destroy();
setcookie('aroma', "", time()-60,"/aroma"); //check path of cookie in inspector add path to delete it 
header("location:../login.php");
 ?>