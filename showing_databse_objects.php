<?php
//making a connection
$connect = mysql_connect('localhost','root','');
//showing databases that are present
//method 1
$res = mysql_query("SHOW DATABASES");

while ($row = mysql_fetch_assoc($res)) {
    echo $row['Database'] . "<br>";
}
//Method 2
$db_list = mysql_list_dbs($connect); 
echo "The list of databases are:<br>";
     while ($row = mysql_fetch_object($db_list))
      { 
      	echo $row->Database . "<br>"; 
      }
//select database
mysql_select_db("hira", $connect);
//show the tables present in defined database
$tables=mysql_list_tables('phpmyadmin', $connect);

echo "The list of tables are:<br>";
     while ($row = mysql_fetch_array($tables))
      { 
      	echo $row[0] . "<br>"; 
      }

//closing the connection
mysql_close($connect);
echo "The connection to the database has been closed."; 


?>
