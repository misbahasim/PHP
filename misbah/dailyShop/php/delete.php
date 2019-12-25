<?php
	include("../config/database.php");
	$db=new connect();
	if(isset($_GET['catdel']))
	{
		$id=$_GET['catdel'];
		$db->db_delete("tblcat",$id);
	}

	if(isset($_GET['prodel']))
	{
		$id=$_GET['prodel'];
		$db->db_delete("tblproduct",$id);
	}
	
?>
