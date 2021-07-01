<?php 
include 'config/database.php';
$db=new Connect();

$email=$_POST['txtemail'];
$pass=md5($_POST['txtpass']);

$query=$db->db_login($email,$pass);
if($query){
	$row=mysqli_fetch_array($query);
	
	$username=$row["name"];
	$user_role=$row["role"];
	session_start();
	$_SESSION['uname']=$username;
	$_SESSION['urole']=$user_role;

	if(($_POST['remember']) == 'on'){
		$expire=time()+60*60*24;
		setcookie('aroma',$username,$expire);
	}

	if($user_role==1)
	{
		header("location:admin/index.php");
	}
	else if($user_role==2)
	{
		header("location:account.php");
	}
}else{
	header("location:login.php?msg=error");
}



?>