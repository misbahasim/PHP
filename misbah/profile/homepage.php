<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</head>
<body>

<?php
	session_start();
	if(isset($_SESSION['name'])=='')
	{
	header("Location:login_form.php");
	}
?>
<div class="container">
	<h1> WELCOME <?php echo $_SESSION['name']; ?></h1> 
<form method="get">

<TABLE class="table table-bordred table-striped"> 
<TR>
	<TH>SERIAL NO.</TH>
	<TH>FIRST NAME</TH>
	<TH>LAST NAME</TH>
	<TH>USER NAME</TH>
	<TH>PASSWORD</TH>
	<TH colspan="2" style="text-align:center">ACTION</TH>
	<TH>PROFILE</TH>
</TR>
<?php
	$connect = mysql_connect('localhost','root','');

	$db="mis_profile";
	$my_db=mysql_select_db($db, $connect);
	echo "<br>Displaying Records from the Admin table:<br>"; 
	$count=1;
	$sql_display=mysql_query("select * from tbladmin");
	while($row=mysql_fetch_array($sql_display))
	{
	echo "<TR>
			<TD>$count</TD>
			<TD>$row[1]</TD>
			<TD>$row[2]</TD>
			<TD>$row[3]</TD>
			<TD>$row[4]</TD>

			<TD><a href='update.php?edit=$row[0]' class='btn btn-info'>Edit</a></TD>
			<TD><a href='delete.php?del=$row[0]' class='btn btn-danger'>Delete</a></TD> 
			<TD><a href='profile.php?upload=$row[0]' class='btn btn-success'>View</a></TD>

		 </TR>";  
		  $count++;
	}

	mysql_close();
?>

</TABLE>
</form>

<a href="logout.php" class="btn btn-primary">Logout</a>
</div>

</body>
</html>

