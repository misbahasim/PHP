<html>
<?php

include "empdetail.inc";
echo "The Employee details: <br><br>";
$empdet = new empdetail();
$empdet->enteremp(10, "John Williams", "Miami");
echo $empdet->empId."<BR>";   //shows (10)
echo '$empdet->empName <BR>'; //shows ($empdet->empName)
echo "$empdet->empCity <BR>"; //shows (Miami )

$empdet->enterdept(1, "Accountant");
echo $empdet->empDept,"<BR>"; //without comma gives error
echo $empdet->empDesig,"<BR>";

// Using constructor
// $empdet = new empdetail(101, "John Williams", "Miami", "Accounts");
// echo $empdet->empId."<BR>";   
// echo '$empdet->empName <BR>'; 
// echo "$empdet->empCity <BR>"; 
// echo $empdet->empDept,"<BR>"; 

?>
</html>