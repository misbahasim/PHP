<?PHP


$kitten_image = 0;
$church_image = 1;

if ($kitten_image == 1) {

print ("<IMG SRC =images/kitten.jpg>");

}
else {

print ("<IMG SRC =images/church.jpg>");}


//NOT operator
$correct_username = 'logmein';
$what_visitor_typed = 'logmein';      //$what_visitor_typed = 'logMEin';

if ($what_visitor_typed != $correct_username) {

print("You're not a valid user of this site!");

}
else {

print("Welcome back, friend!");

}
//AND and OR
$username ='user';
$password ='password';

if ($username =='user' && $password =='password') {

print("Welcome back!");

}
else {

print("Invalid Login Detected");

}

$total_spent =100;
$special_key ='SK12345';

if ($total_spent ==100 || $special_key =='SK12345') {

print("Discount Granted!");

}
else {

print("No discount for you!");

}
//XOR
$contestant_one = true;
$contestant_two = true;

if ($contestant_one XOR $contestant_two) {

print("Only one winner!");

}
else {

print("Both can't win!");

}

#The ! Operator

$test_value = false;

if ($test_value == false) {

print(!$test_value);

}

/*=== and !==

In recent editions of PHP, two new operators have been introduced: the triple equals sign ( = = =) and an exclamation, double equals ( != =). These are used to test if one value has the same as another AND are of the same type. An example would be:*/

$number = 3;
$text = 'three';

if ($number === $text) {

print("Same");

}
else {

print("Not the same");

}

?>