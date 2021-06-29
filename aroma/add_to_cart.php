<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="insertCart.php" method="post">
	<input type="hidden" name="name" value="shirt">
	<input type="hidden" name="price" value="shirt">
	<input type="hidden" name="qty" value="shirt">
	<input type="submit" name="Add to cart">
</form>

</body>
</html>

<!-- insertCart.php -->

<?php 
session_start();

$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['qty'];

$product=array($name,$price,$quantity);
$_SESSION[$name]=$product;

print_r($product);
// header("location:index.php");

 ?>

 <!-- viewCart.php -->

<?php session_start(); ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
<!-- same navigation bar -->

 <table>

<?php 
$bill=0;
// to break the session(array) we are going to use foreach
foreach ($_SESSION as $products) {
	print_r($products);
	echo "<form method='post' action='editCart.php'>";
	foreach ($products as $key => $value) {
		$p=0;
		$q=0;
		if ($key==2) {
			echo "<input type='number' value='$value'>";
			$q=$value;
		}elseif ($key==1) {
			echo "$value";
			$p=$value;
		}elseif ($key==0) {
			echo "$value";
		}
	}
	$bill=($p*$q);
	echo "$bill";
	echo "<input type='submit' name='event' value='update'>";
 	echo "<input type='submit' name='event' value='remove'>";
 	echo "</form>"
;}
 ?>

</table>
 </body>
 </html>