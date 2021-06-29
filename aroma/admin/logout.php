<?php 
session_start();
$expire=time()-60*60*24;
setcookie('aroma', $_SESSION['uname'], $expire);
session_destroy();
header("location:../login.php");
 ?>