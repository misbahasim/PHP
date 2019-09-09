<?php
$connect = mysql_connect('localhost','root','');

	$db="mis_profile";
	$my_db=mysql_select_db($db, $connect);


if (isset($_GET['del']))
$id = $_GET['del'];
$delete=mysql_query("DELETE FROM tbladmin WHERE id=$id");
if($delete){
	header("location:homepage.php");
}
else echo "not deleted";

	?>