<?php
//making a connection
$connect = mysqli_connect('localhost','root','');
//showing databases that are present
//method 1
$res = mysqli_query($connect,"SHOW DATABASES");

while ($row = mysqli_fetch_assoc($res)) {
    echo $row['Database'] . "<br>";
}
//Method 2
// $db_list = mysql_list_dbs($connect); 
// echo "The list of databases are:<br>";
//      while ($row = mysqli_fetch_object($db_list))
//       { 
//       	echo $row->Database . "<br>"; 
//       }
//select database
$result=mysqli_select_db($connect,"test" );
if($result) echo "Connected to test database<br>";

//show the tables present in defined database
$conn = mysqli_connect('localhost','root','','performance_schema');

$tables = mysqli_query($conn,"SHOW TABLES");
echo "The list of tables are:<br>";
     while ($row = mysqli_fetch_array($tables))
      { 
      	echo $row[0] . "<br>"; 
      }

//closing the connection
mysqli_close($connect);
mysqli_close($conn);
echo "The connection to the database has been closed."; 


?>
