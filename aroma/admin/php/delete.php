<?php 
include '../../config/database.php';
$db=new Connect();

if (isset($_GET['u_id'])) {
	$id=$_GET['u_id'];
	$delete=$db->db_delete("UPDATE `tbluser` SET `status`='Disabled' WHERE id=$id");
	if ($delete) 
	{
		header("location:../user.php");
	}
	else
	{
		echo "alert('not deleted')";
		header("location:../user.php");
	}
}

if (isset($_GET['p_id'])) 
{
	$id=$_GET['p_id'];
	$delete=$db->db_delete("DELETE FROM `product` WHERE id=$id");
	if ($delete) 
	{
		header("location:../product.php");
	}
	else
	{
		echo "alert('not deleted')";
		header("location:../product.php");
	}
}

if (isset($_GET['c_id'])) 
{
	$id=$_GET['c_id'];
	$delete=$db->db_delete("DELETE FROM `tblcat` WHERE id=$id");
	if ($delete) 
	{
		header("location:../category.php");
	}
	else
	{
		echo "alert('not deleted')";
		header("location:../category.php");
	}
}

?>