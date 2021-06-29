<?php include 'header.php'; ?>
  
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
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
							<h4>Already have an account?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="login.php">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Create an account</h3>
						<?php     
						if (isset($_GET['msg'])) {
							$message=$_GET['msg'];
							if ($message=="unique_name") {
							 $show_message="Username already exists! Please type another name";
							}
							if ($message=="unique_mail") {
								$show_message="Email already exists! Please type another email";
							   }
							else if ($message=="error") {
								$show_message="Not registered";
							}
							else if ($message=="empty") {
								$show_message="Fill the form first";
							}
							else if ($message=="mismatch") {   
								$show_message="Password don't match";  
							}
						 echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
							</button> $show_message
							</div>";
						}     
						?>
						<form class="row login_form" action="admin/register.php" id="register_form" method="post">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="u_name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required pattern="[a-zA-Z ]{3,20}"
                    				title="enter letters min=3 max=20" maxlength="20">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="u_mail" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required pattern="[a-zA-Z_][a-zA-Z0-9.]+@[a-z]+\.[a-z]{2,4}$">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="u_pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required maxlength="15">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required maxlength="15">	
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-register w-100" name="registerUser">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


<?php include 'footer.php'; ?>
