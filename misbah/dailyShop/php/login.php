<?php

include('../config/database.php');
$db=new connect();

if(isset($_POST['btnLogin']))
{
	$uname=$_POST['txtemail'];
	$pass=$_POST['txtpassword'];
	$role=$_POST['user'];
	$db->db_login($uname,$pass,$role);
}

?>