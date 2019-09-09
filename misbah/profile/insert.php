
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
<link href="css/register.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    	<div class="panel panel-default">
    		<div class="panel-heading">
	    		<h3 class="panel-title">Sign up here!<small>It's free!</small></h3>
	 			</div>
	 			<div class="panel-body">


	    		<form role="form" method="post" action="insert.php">
	    			<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-6">
	    					<div class="form-group">
	                <input type="text" name="txtfname" id="first_name" class="form-control input-md" placeholder="First Name">
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-6">
	    					<div class="form-group">
	    						<input type="text" name="txtlname" id="last_name" class="form-control input-md" placeholder="Last Name">
	    					</div>
	    				</div>
	    			</div>

	    			<div class="form-group">
	    				<input type="text" name="txtusername" id="email" class="form-control input-md" placeholder="User Name">
	    			</div>
					<div class="form-group">
						<input type="password" name="txtpass" id="password" class="form-control input-md" placeholder="Password">
					</div>	
					<label>Select gender</label>		
					<div class="radio">
						<label><input type="radio" name="rdgender" value="male"> male</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="rdgender" value="female"> female</label>
					</div>	
					<div class="form-group">
						<label>Select city</label>
						<select class="form-control" name="slcity">
							<option value="karachi"> karachi </option>
							<option value="lahore"> lahore </option>
							<option value="islamabad"> islamabad </option>
							<option value="multan"> multan </option>
							<option value="quetta"> quetta </option>
							<option value="peshawar"> peshawar </option>
						</select>
					</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon3">Date of Birth</span>
						<input type="date" name="dtbirth" class="form-control input-md">
					</div>	
				</div>
				<div class="form-group">
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon3">select hobby</span>
						<input type="checkbox" name="chkhobby[]" value="cooking"> cooking
						<input type="checkbox" name="chkhobby[]" value="sports"> sports
						<input type="checkbox" name="chkhobby[]" value="binge"> binge
						<input type="checkbox" name="chkhobby[]" value="reading"> reading
						<input type="checkbox" name="chkhobby[]" value="creativity"> creativity
					</div>
				</div>
					

	    			<input type="submit" name="btnRegister" value="Register" class="btn btn-info btn-block">
	    		</form>


	    	</div>
    		</div>
		</div>
	</div>
</div>

</body>
</html>


<?php
if(isset($_POST['btnRegister']))
{
	$connect = mysql_connect('localhost','root','');
	$db="mis_profile";
	$my_db=mysql_select_db($db, $connect);

	$first    = $_POST['txtfname'];
	$last     = $_POST['txtlname'];
	$user     = $_POST['txtusername'];
	$pass     = $_POST['txtpass'];
	$gndr     = $_POST['rdgender'];
	$cty      = $_POST['slcity'];
	$birthday = $_POST['dtbirth'];
	$hobby    = $_POST['chkhobby'];
	$hob=implode(",",$hobby);
	
	// Inserting values
	$sql_insert = "INSERT INTO tbladmin(Fname,Lname,username,password,gender,city,dob,hobbies) Values 
		('$first','$last','$user','$pass','$gndr','$cty','$birthday','$hob')";

	$result=mysql_query($sql_insert);
	if ($result) {
		echo "Row inserted sucessfully<BR>";
		header("location:login_form.php");
	}
	else
	{
		echo "Unable to insert  record<BR>";
		mysql_error();
	}
}

?>
