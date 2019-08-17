<html>
<head>
<title> A BASIC HTML FORM </title>

<!--
--To return data from a HTML form element, you use the following strange syntax: 
--$_POST['formElement_name'];  
--The $_POST[ ] is an inbuilt function you can use to get POST data from a form.
--So PHP will look for a HTML form element with the NAME username. It then looks at the VALUE attribute for this form element. It returns this value for you to use and manipulate. 

--You know about the if statement. But in between the round brackets, we have isset( ). This is an inbuilt function that checks if a variable has been set or not. In between the round brackets, you type what you want isset( ) to check. For us, this is $_POST['Submit']. If the user just refreshed the page, then no value will be set for the Submit button. If the user did click the Submit button, then PHP will automatically return a value.
-->

<?php
  
  if(isset($_POST['Submit1'])){
	$username=$_POST['username'];
	if($username == "letmein"){
		print("Welcome back!friend");
	}
	else{
		print("You're not a member of this site");
	}
  }
  else{
	  $username="";
  }

?>

</head>
<body>

<!--The METHOD attribute tells you how form data is being sent, and the ACTION attribute tells you where it is being sent.-->

	<form method="POST" action="basicForm.php">
	
		<input type="text" Name='username' value="<?PHP print $username ; ?>">
		<!--To post the details back to the form, and thus keep the data the user has already typed out, you can use this:
		VALUE="<//?PHP print $username ; ?>"
		In other words, we're now printing out the VALUE attribute with PHP code.-->
		<input type="submit" Name="Submit1" value="Login">
		
	</form>

</body>
</html>