<?php

include('../config/database.php');
$db=new connect();
$cc=$db->conn();

if(isset($_POST['btnLogin']))
{
	$uname=$_POST['txtname'];
	$pass=($_POST['txtpass']);
	$db->db_login($uname,$pass);
}

?>