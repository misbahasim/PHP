<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
<div class="container">
    <div class="row">
  <div class="col-md-5 mx-auto">
  <div id="first">
    <div class="myform form ">
       <div class="logo mb-3">
         <div class="col-md-12 text-center">
          <h1>Login</h1>
         </div>
      </div>
        <form method="post" action="../php/login.php" name="login">
         <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="txtemail"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name="txtpassword" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
         </div>
         <div class="form-group">
            <label class="radio-inline">Select Roles: </label>
            <label class="radio-inline"><input type="radio" name="user" value="1">Admin</label>
            <label class="radio-inline"><input type="radio" name="user" value="3">Manager</label>
            <label class="radio-inline"><input type="radio" name="user" value="2">Customer</label>
         </div>
         <div class="col-md-12 ">
            <div class="login-or">
               <span class="span-or"><input type="checkbox" value="">Remember Me</span>
            </div>
         </div>
         <div class="col-md-12 text-center ">
            <input type="submit" name="btnLogin" class=" btn btn-block mybtn btn-primary tx-tfm" value="Login">
         </div>
         <div class="col-md-12 mb-3">
            <p class="text-center">
               <a href="#" class="google btn mybtn">Fogot Password?</a>
            </p>
         </div>
         <div class="form-group">
            <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
         </div>
      </form>
    </div>
      </div>
        <div id="second">
            <div class="myform form ">
              <div class="logo mb-3">
                 <div class="col-md-12 text-center">
                    <h1 >Signup</h1>
                 </div>
              </div>
              <form name="registration">
                 <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                 </div>
                 <div class="col-md-12 text-center mb-3">
                    <input type="submit" class="btn btn-block mybtn btn-primary tx-tfm" value="Get Started For Free">
                 </div>
                 <div class="col-md-12 ">
                    <div class="form-group">
                       <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                    </div>
                 </div>
               </form>
            </div>
        </div>
      </div>
    </div>
</div>   
         
</body>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/login.js"></script>

</html>