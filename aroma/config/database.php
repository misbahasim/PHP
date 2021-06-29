<?php 
/**
 * Configuration of database
 */
class Connect
{
	function conn()
	{
		$con=mysqli_connect("localhost","root","","ecommerce");
		return $con;
	}
	function db_select($tbl)
	{
		$select=mysqli_query($this->conn(),"SELECT * FROM $tbl");
		return $select;
	}
	function db_insert($q)
	{
		$query=mysqli_query($this->conn(),$q);
		if($query>0)
			return true;
		else
			return false;
	}
	function db_update($q)
	{
		$query=mysqli_query($this->conn(),$q);
		if($query>0)
			return true;
		else
			return false;
	}
	function db_delete($q)
	{
		$query=mysqli_query($this->conn(),$q);
		if($query>0)
			return true;
		else
			return false;
	}
	function db_login($e,$p)
	{
		$login=mysqli_query($this->conn(),"SELECT * FROM `tbluser` WHERE `email`='$e' AND `password`='$p' AND `status`='Enabled'");
		$count=mysqli_num_rows($login);
		if ($count>0) {
			return $login;
		}
		else
			return false;
	}
	function select_query($q)
	{
		$query=mysqli_query($this->conn(),$q);
		return $query;
	}
}

 ?>