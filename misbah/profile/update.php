<?php

$connect = mysql_connect('localhost','root','');

	$db="mis_profile";
	$my_db=mysql_select_db($db, $connect);

	$id = $_GET['edit'];
	if (isset($_GET['edit'])) {
		
		$update = true;
		$record = mysql_query("SELECT * FROM tbladmin WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysql_fetch_array($record);
			$firstname = $n['Fname'];
			$lastname  = $n['Lname'];
			$uname     = $n['username'];
			$pass      = $n['password'];
			$gndr      = $n['gender'];
			$cty       = $n['city'];
			$birthday  = $n['dob'];
			$hoby      = $n['hobbies'];
			$arr=explode(",",$hoby);
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation</title>
<link href="css/register.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    	<div class="panel panel-default">
    		<div class="panel-heading">
	    		<h3 class="panel-title">Sign up here!<small>It's free!</small></h3>
	 			</div>
	 			<div class="panel-body">


	    		<form method="post">
	    			<div class="row">
	    				<div class="col-xs-6 col-sm-6 col-md-6">
	    					<div class="form-group">
	                <input type="text" name="txtfname" id="first_name" class="form-control input-sm" value="<?php echo $firstname; ?>">
	    					</div>
	    				</div>
	    				<div class="col-xs-6 col-sm-6 col-md-6">
	    					<div class="form-group">
	    						<input type="text" name="txtlname" id="last_name" class="form-control input-sm" value="<?php echo $lastname; ?>">
	    					</div>
	    				</div>
	    			</div>

	    			<div class="form-group">
	    				<input type="text" name="txtusername" id="email" class="form-control input-sm" value="<?php echo $uname; ?>">
	    			</div>
					<div class="form-group">
						<input type="password" name="txtpass" id="password" class="form-control input-sm" value="<?php echo $pass; ?>">
					</div>		

					<label>Select gender</label>		
					<div class="radio">
						<label><input type="radio" name="rdgender" value="male" checked="<?php echo $gndr; ?>"> male</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="rdgender" value="female" checked="<?php echo $gndr; ?>"> female</label>
					</div>	
					<div class="form-group">
						<select class="form-control" name="slcity">
							<option ><?php echo $cty; ?></option>
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
						<input type="date" name="dtbirth" class="form-control input-md"
						value="<?php echo $birthday;?>">
					</div>	
				</div>
				<div class="form-group">
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon3">select hobby</span>
						<input type="checkbox" name="hobby[]" 
						<?php if(in_array("cooking",$arr)){echo "checked";}?> 
						value="cooking"> cooking
						<input type="checkbox" name="hobby[]" 
						<?php if(in_array("sports",$arr)){echo "checked";}?> 
						value="sports"> sports
						<input type="checkbox" name="hobby[]" 
						<?php if(in_array("binge",$arr)){echo "checked";}?> 
						value="binge"> binge
						<input type="checkbox" name="hobby[]" 
						<?php if(in_array("reading",$arr)){echo "checked";}?> 
						value="reading"> reading
						<input type="checkbox" name="hobby[]" 
						<?php if(in_array("creativity",$arr)){echo "checked";}?> 
						value="creativity"> creativity
					</div>
				</div>

	    			<input type="submit" name="btnUpdate" value="Update" class="btn btn-info btn-block">
	    		</form>


	    	</div>
    		</div>
		</div>
	</div>
</div>
</body>
</html>


<?php
if (isset($_POST['btnUpdate'])) {

			$firstname = $_POST['txtfname'];
			$lastname  = $_POST['txtlname'];
			$uname     = $_POST['txtusername'];
			$pass      = $_POST['txtpass'];
			$gndr      = $_POST['rdgender'];
			$cty       = $_POST['slcity'];
			$birthday  = $_POST['dtbirth'];
			$hoby      = $_POST['hobby'];
			$hob=implode(",",$hoby);

	$result=mysql_query("UPDATE tbladmin SET Fname='".$firstname."', Lname='".$lastname."', username='".$uname."', password='".$pass."', gender='".$gndr."', city='".$cty."', dob='".$birthday."', hobbies='".$hob."' WHERE id=$id");
	
	if($result)
	{
		$_SESSION['message'] = "Address updated!"; 
		header('location: homepage.php');
	}
	else echo "not updated";
}

?>
