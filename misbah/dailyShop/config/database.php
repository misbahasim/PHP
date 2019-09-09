<?php
class connect{
	function conn()
	{
		$con=mysqli_connect('localhost','root','','ecommerce');
		return $con;
	}
	function db_insert($q)
	{
		$query=mysqli_query($this->conn(),$q);
		if($query>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function db_select($table)
	{
		$select=mysqli_query($this->conn(),"select * from $table");
		return $select;
	}
	function db_login($u,$p)
	{
		$login=mysqli_query($this->conn(),"select * from tbladmin where email='$u' and password='$p'");
		$count=mysqli_num_rows($login);
		if($count>0)
		{
			session_start();
			$rows=mysqli_fetch_array($login);
			$_SESSION['uname']=$rows[1];
			header("location:../admin/dashboard.php");
		}
		else
		{
			header("location:../index.php");
		}
	}
}
?>