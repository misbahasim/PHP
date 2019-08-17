<html>
<head>
<title>Variables - Some Practice</title>
</head>
<body>

<?php
/* --------------ADDITION------------*/

print (10 + 20 + 30 . "\n");
$number = 10;

print ($number + 30 . "\n");

/* --------------SUBTRACTION------------*/

$first_number = 10;
$second_number = 20;
$third_number = 100;

$sum_total = $third_number - $second_number - $first_number;
//Version one
$sum_total = ($third_number - $second_number) + $first_number;

//Version two
$sum_total = $third_number - ($second_number + $first_number);

print ($sum_total . "\n");

/* --------------MULTIPLICATION------------*/

$first_number = 10;
$second_number = 20;
$third_number = 100;

$sum_total = $third_number * $second_number * 10;
//Version one
$sum_total = $third_number + ($second_number * $first_number);

//Version two
$sum_total = ($third_number + $second_number) * $first_number;

print ($sum_total . "\n");

/* --------------DIVISON------------*/

$first_number = 10;
$second_number = 20;
$third_number = 100;

$sum_total = $third_number - $second_number / $first_number;

print ($sum_total . "\n");
//Version one
$sum_total = $third_number - ($second_number / $first_number);

//Version two
$sum_total = ($third_number - $second_number) / $first_number;

/* --------------FLOATING POINT------------*/

$first_number = 1.2;
$second_number = 2.5;
$sum_total = $second_number + $first_number;

print ($sum_total . "\n");


/*Some Exercises

To round up this section on number variables, here's a few exercises (In your print statements, there should be no numbers – just variable names):

Exercise
Write a script to add up the following figures: 198, 134, 76. Use a print statement to output your answer.

Exercise
Write a script to add up the following two numbers: 15, 45. Then subtract the answer from 100. Use a print statement to output your answer.

Exercise
Use variables to calculate the answer to the following sum:

(200 * 15) / 10

Use a print statement to output your answer.*/


?>

</body>
</html>