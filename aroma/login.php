<?php include 'header.php';  
if(isset($_SESSION['uname'])){
    header("location:index.php");
}
?>

  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Login / Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="register.php">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
					<?php     
						if (isset($_GET['msg'])) {
							$message=$_GET['msg'];
							if($message=="success"){
							echo "<div class='alert alert-primary alert-dismissible bg-primary text-white border-0 fade show' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
							</button>  Registered sucessfully, Now login to continue	</div>";
							}
							else if ($message=="error") {
							echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
							</button>  Invalid email or password	</div>";
							}
						} 
						    
					?>
						<h3>Log in to enter</h3>
						<form class="row login_form" action="admin/login.php" method="post">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="txtemail" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required pattern="[a-zA-Z_][a-zA-Z0-9.]+@[a-z]+\.[a-z]{2,}$">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="txtpass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="remember">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="Log In" class="button button-login w-100" name="btnLogin">Log In</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


<?php include 'footer.php'; ?>