<html>
<head>
<title>Variables - Some Practice</title>
</head>
<body>

<?php
/* --------------TESTING VARIABLES------------
Use this type of comment if you want to spill over to more than one line.
Notice how the comment begin and end.
*/


$test_String = "It Worked!";
$first_number = 10;

print($test_String);

$first_number = 10;
$second_number = 20;
$sum_total = $first_number + $second_number;

$direct_text = 'The two variables added together = ';

//concatenation
print ("first_number" . $first_number );     //"$first_number": it prints the variable number  
print ("second_number" . $second_number );   //'$first_number': it prints $first_number
print ($direct_text . $sum_total);          // deleting the dot gives an error

?>

</body>
</html>