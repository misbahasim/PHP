<?php 
include '../../config/database.php';
$db=new Connect();

if (isset($_POST['btnAddUser'])) {
	$name=$_POST['u_name'];
    $email=$_POST['u_mail'];
	$pass=md5($_POST['u_pass']);
	$status=$_POST['u_status'];
	$query=$db->db_insert("INSERT INTO `tbluser`(`name`, `email`, `password`, `status`) VALUES ('$name','$email','$pass','$status')");
	if ($query) {
		header("location:../add_user.php?msg=success");
	}
	else
	{
		header("location:../add_user.php?msg=error");
	}
	
}

if (isset($_POST['btnAddCategory'])) {
	$cat=$_POST['txtcategory'];
	$query=$db->db_insert("INSERT INTO `tblcat`(`category`) VALUES ('$cat')");
	if ($query) {
		header("location:../add_category.php?msg=success");
	}
	else
	{
		header("location:../add_category.php?msg=error");
	}
	
}

if (isset($_POST['btnAddProduct'])) {
	$name=$_POST['p_name'];
    $price=$_POST['p_price'];
    $cat=$_POST['p_cat'];
	$avail=$_POST['p_avail'];
	$desc=$_POST['p_desc'];
	$tmpimage=$_FILES['p_image']['tmp_name'];
	$image=$_FILES['p_image']['name'];
	$query=$db->db_insert("INSERT INTO `product`(`name`, `price`, `category`, `Availibility`, `Description`, `product_image`) VALUES ('$name','$price','$cat','$avail','$desc','$image')");
	move_uploaded_file($tmpimage, "../../img/".$image);
	if ($query) {
		header("location:../add_product.php?msg=success");
	}
	else
	{
		header("location:../add_product.php?msg=error");
	}
}

if (isset($_POST['btnUpdUser'])) {
	$id=$_POST['u_id'];
	$name=$_POST['u_name'];
    $email=$_POST['u_mail'];
	$pass=md5($_POST['u_pass']);
	$role=$_POST['u_role'];
	$status=$_POST['u_status'];
	$query=$db->db_update("UPDATE `tbluser` SET `name`='$name',`email`='$email',`password`='$pass',`status`='$status' WHERE `id`=$id ");
	if ($query) {
		header("location:../user.php?msg=success");
	}
	else
	{
		header("location:../user.php?msg=error");
	}
	
}

if (isset($_POST['btnUpdCategory'])) {
	$id=$_POST['txtid'];
	$cat=$_POST['txtcat'];
	$query=$db->db_update("UPDATE `tblcat` SET `category`='$cat' WHERE `id`=$id");
	if ($query) {
		header("location:../category.php?msg=success");
	}
	else
	{
		header("location:../category.php?msg=error");
	}
	
}
if (isset($_POST['btnUpdProduct'])) {
	$id=$_POST['p_id'];
	$name=$_POST['p_name'];
    $price=$_POST['p_price'];
    $cat=$_POST['p_cat'];
	$avail=$_POST['p_avail'];
	$desc=$_POST['p_desc'];
	$tmpimage=$_FILES['p_image']['tmp_name'];
	$image=$_FILES['p_image']['name'];
	
	$query;
	if(empty($tmpimage))
	{
		$query="UPDATE `product` SET `name`='$name',`price`='$price',`category`='$cat',`Availibility`='$avail',`Description`='$desc' WHERE `id`=$id";
	}
	else
	{
		move_uploaded_file($tmpimage, "../../img/".$image);
		$query="UPDATE `product` SET `name`='$name',`price`='$price',`category`='$cat',`Availibility`='$avail',`Description`='$desc',`product_image`='$image' WHERE `id`=$id";
	}
	  
    $upd_product=$db->db_update($query);	
	if ($upd_product) {
		header("location:../product.php?msg=success");
	}
	else
	{
		header("location:../product.php?msg=error");
	}
}

?>