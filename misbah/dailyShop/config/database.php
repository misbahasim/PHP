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

	function db_update($q)
	{
		$query=mysqli_query($this->conn(),$q);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function db_delete($tbl,$id)
	{
		$query=mysqli_query($this->conn(),"delete from $tbl where id=$id");
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

	function db_select_table($table,$id)
	{
		$select=mysqli_query($this->conn(),"select * from $table where id=$id");
		return $select;
	}

	function db_login($u,$p,$r)
	{
		$login=mysqli_query($this->conn(),"select * from tbluser where email='$u' and password='$p' and role='$r'");
		$count=mysqli_num_rows($login);
		if($count>0)
		{
			session_start();
			$rows=mysqli_fetch_array($login);
			$_SESSION['uname']=$rows['Name'];
			$_SESSION['role']=$row['role'];
			header("location:../admin/dashboard.php");
		}
		else
		{
			header("location:../admin/index.php");
		}
	}

	function select_cat($cid)
	{
		$select_cat_for_product=mysqli_query($this->conn(),"select category from tblcat join tblproduct on tblcat.id=$cid ");
		return $select_cat_for_product;
	}
}


?>