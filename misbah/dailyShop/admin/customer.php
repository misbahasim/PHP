<?php

session_start();
if(!isset($_SESSION['uname']) || $_SESSION['role']!="customer")
{
	header("location:index.php");
}

echo "<h1>Hello $_SESSION['USERNAME']</h1>";
echo "<h1>You are a : $_SESSION['role']</h1>";

?>

