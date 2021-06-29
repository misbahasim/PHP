<?php include("config/database.php");
$db=new connect();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <?php
                    $cat=$db->db_select("tblcat");
                    while($row=mysqli_fetch_array($cat))
                    {
                      echo "<li class='nav-item'>
                      <a class='nav-link' href='category.php?cname=".base64_encode($row[1])."'>$row[1]</a></li>";
                    } 
                 ?>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              <li class="nav-item">
                <?php 
                if (empty($_SESSION['urole']) || $_SESSION['urole']==2) {
                  echo "<a class='nav-link' href='account.php'>Account</a>";
                }
                else if($_SESSION['urole']==1){
                  echo "<a class='nav-link' href='admin/index.php'>Dashboard</a>";
                }
                ?>
              </li>
            </ul>
            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-shopping-cart"></i>
                <?php 
                  if (isset($_SESSION['cart'])) {
                    $count=count($_SESSION['cart']);
                    echo "<span class='nav-shop__circle' id='card_count'>$count</span>";
                  }else{
                    echo "<span class='nav-shop__circle' id='card_count'>0</span>";
                  }
                 ?>
                </button> 
              </li>
              <?php 
                if (empty($_SESSION['uname'])) {
                  echo "<li class='nav-item'><a class='button button-header' href='login.php'>Login</a></li>";
                }
                else{
                  echo "<li class='nav-item'><a class='button button-header' href='admin/logout.php'>Logout</a></li>";
                  }
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->