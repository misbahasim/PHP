<?php
$connect = mysqli_connect('localhost','root','');
if($connect){
	echo "Connection Established <br>";
}
else
{
	die("Connection not Established<br>");
}/*
$sql_database="Create database mis_profile";
if(mysqli_query($connect,$sql_database)==true)
{
	echo "Database has been made";
}
else die("Database not created");*/
$db="mis_profile";
$my_db=mysqli_select_db($connect,$db);
if($my_db)
{
	echo "Connected to database<br>";
}
else
{
	die("Not connected to database<br>");
}
/*
// Make a table
$sql_table = "CREATE TABLE USER_CONTACT("."USER_ID INT NOT NULL PRIMARY KEY,"."USER_NAME CHAR(25) NOT NULL, "."USER_EMAIL_ID CHAR(25)".")";
if(mysqli_query($connect,$sql_table))
 { 
 	echo "Table is created<BR>"; 
 } 
else 
 { 
	die("Unable to create the table<BR>"); 
 } */
// Inserting values
$sql_insert = "INSERT INTO USER_CONTACT(user_id,user_name,USER_EMAIL_ID) Values 
(103,'Simon','simon@mail.com')";
// (101,'Adam','adam@mail.com')
// (102,'Sasha','sasha@mail.com')
// (103,'Simon','simon@mail.com')
	// (104,'Dexter','dexter@mail.com')

$result=mysqli_query($connect,$sql_insert);
if ($result) {
	echo "Row inserted sucessfully<BR>";
}
else
{
	echo "Unable to insert  record<BR>";
	mysqli_error($connect);
}/*
//Deleting in a table
$sql_delete=("DELETE FROM USER_CONTACT WHERE USER_ID = '101'");
$result=mysqli_query($connect,$sql_delete);
 if($result)
  { 
  	echo "Records Deleted: $result<br>"; 
  } 
  else 
  { 
  	echo "RECORDS NOT FOUND IN THE TABLE<br>";
  	mysqli_error($connect); 
  } 
//Updating in a table
  $sql_update=("UPDATE USER_CONTACT SET USER_EMAIL_ID='DexTer@gmail.com' where USER_ID='104'	"); 
  $result=mysqli_query($connect,$sql_update);
   if($result) 
   	{     
   		echo "RECORDS UPDATED: $result<br>"; 
   	} 
   	else 
	{     
		echo "UNABLE TO UPDATE RECORDS<br>";
		mysqli_error($connect); 
	} 
	
//Displaying from table
echo "<br>Displaying Records from the USER_CONTACT table:<br>"; 
$sql_display=mysqli_query($connect,"select * from user_contact");

while($row=mysqli_fetch_array($sql_display))
{
	echo "$row[USER_ID]";
	echo $row['USER_NAME']; //$row[USER_NAME];(gives error)
	echo $row[2].'<br>';
}
*/

//Displaying in a table
echo "<br>Displaying Records from the USER_CONTACT table:<br>"; 
$sql_display=mysqli_query($connect,"select * from user_contact");
?>
<TABLE BORDER BGCOLOR='WHITE'> 
<TR><TH>USER_ID</TH><TH>USER_NAME</TH><TH>USER_EMAIL_ID </TH></TR>
<?php
while($row=mysqli_fetch_array($sql_display))
{
echo "<TR>
		<TD>$row[USER_ID]</TD><TD>$row[USER_NAME]</TD><TD>$row[USER_EMAIL_ID]</TD>
	 </TR>";  
}
?>
</TABLE> 

<?php
mysqli_close($connect);
echo "The connection to the database has been closed."; 

?>
