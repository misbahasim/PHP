<?php  include 'header.php';
if(isset($_SESSION['uname'])){
	if($_SESSION['urole']!=2)
    {
        header("location:index.php");
    }	
}else{
	header("location:login.php");
}
?>
<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Account</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
<!--================Blog Area =================-->
<section class="blog_area single-post-area py-80px section-margin--small">
<div class="container">
<div class="row">
<div class="col-lg-8 posts-list">
		<div class="single-post row">
				<div class="col-lg-12">
						<div class="feature-img">
								<img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
						</div>
				</div>
				<div class="col-lg-3  col-md-3">
						<div class="blog_info text-right">
								<div class="post_tag">
										<a href="#">Food,</a>
										<a class="active" href="#">Technology,</a>
										<a href="#">Politics,</a>
										<a href="#">Lifestyle</a>
								</div>
								<ul class="blog_meta list">
										<li>
												<a href="#">Mark wiens
														<i class="lnr lnr-user"></i>
												</a>
										</li>
										<li>
												<a href="#">12 Dec, 2017
														<i class="lnr lnr-calendar-full"></i>
												</a>
										</li>
										<li>
												<a href="#">1.2M Views
														<i class="lnr lnr-eye"></i>
												</a>
										</li>
										<li>
												<a href="#">06 Comments
														<i class="lnr lnr-bubble"></i>
												</a>
										</li>
								</ul>
								<ul class="social-links">
										<li>
												<a href="#">
														<i class="fab fa-facebook-f"></i>
												</a>
										</li>
										<li>
												<a href="#">
													<i class="fab fa-twitter"></i>																				
												</a>
										</li>
										<li>
												<a href="#">
													<i class="fab fa-github"></i>																				
												</a>
										</li>
										<li>
												<a href="#">
													<i class="fab fa-behance"></i>																				
												</a>
										</li>
								</ul>
						</div>
				</div>
				<div class="col-lg-9 col-md-9 blog_details">
						<h2>Astronomy Binoculars A Great Alternative</h2>
						<p class="excert">
								MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
								on boot camp when you can get the MCSE study materials yourself at a fraction.
						</p>
						<p>
								Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
								camp when you can get the MCSE study materials yourself at a fraction of the camp price.
								However, who has the willpower to actually sit through a self-imposed MCSE training. who
								has the willpower to actually sit through a self-imposed
						</p>
						<p>
								Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
								camp when you can get the MCSE study materials yourself at a fraction of the camp price.
								However, who has the willpower to actually sit through a self-imposed MCSE training. who
								has the willpower to actually sit through a self-imposed
						</p>
				</div>
				<div class="col-lg-12">
						<div class="quotes">
								MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
								on boot camp when you can get the MCSE study materials yourself at a fraction of the camp
								price. However, who has the willpower to actually sit through a self-imposed MCSE training.
						</div>
						<div class="row">
								<div class="col-6">
										<img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
								</div>
								<div class="col-6">
										<img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
								</div>
								<div class="col-lg-12 mt-4">
										<p>
												MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
												on boot camp when you can get the MCSE study materials yourself at a fraction of
												the camp price. However, who has the willpower.
										</p>
										<p>
												MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
												on boot camp when you can get the MCSE study materials yourself at a fraction of
												the camp price. However, who has the willpower.
										</p>
								</div>
						</div>
				</div>
		</div>
		
</div>
<div class="col-lg-4">
		<div class="blog_right_sidebar">
				<aside class="single_sidebar_widget author_widget">
						<img class="author_img rounded-circle" src="img/blog/author.png" alt="">
						<h4><?php echo $_SESSION['uname']; ?></h4>
						<p>Customer</p>
						<div class="social_icon">
  <a href="#">
      <i class="fab fa-facebook-f"></i>
  </a>
  <a href="#">
      <i class="fab fa-twitter"></i>
  </a>
  <a href="#">
      <i class="fab fa-github"></i>
  </a>
  <a href="#">
    <i class="fab fa-behance"></i>
  </a>
</div>
						<p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should
								have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits
								detractors.
						</p>
						<div class="br"></div>
				</aside>
				<aside class="single_sidebar_widget ads_widget">
						<a href="#">
								<img class="img-fluid" src="img/blog/add.jpg" alt="">
						</a>
						<div class="br"></div>
				</aside>
				<aside class="single_sidebar_widget post_category_widget">
						<h4 class="widget_title">Options</h4>
						<ul class="list cat-list">
								<li>
										<a href="#" class="d-flex justify-content-between">
												<p>Account Settings</p>
												<p>37</p>
										</a>
								</li>
								<li>
										<a href="#" class="d-flex justify-content-between">
												<p>Cart</p>
												<p>24</p>
										</a>
								</li>
								<li>
										<a href="#" class="d-flex justify-content-between">
												<p>Orders</p>
												<p>59</p>
										</a>
								</li>
								<li>
										<a href="#" class="d-flex justify-content-between">
												<p>Address</p>
												<p>29</p>
										</a>
								</li>
						</ul>
				</aside>
		</div>
</div>
</div>
</div>
</section>
<!--================Blog Area =================-->
  
<?php include 'footer.php'; ?>