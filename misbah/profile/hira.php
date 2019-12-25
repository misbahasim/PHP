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
<form method="get">

<TABLE> 
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

			<TD><a href='update_hira.php?id=".base64_encode($row[0])."' class='btn btn-info'>Update</a></TD>
			<TD><a href='delete_hira.php?delid=$row[0]' class='btn btn-danger'>Delete</a></TD>

		 </TR>";  
		  $count++;
	}

	mysql_close();
?>

</TABLE>
</form>


</body>
</html>
