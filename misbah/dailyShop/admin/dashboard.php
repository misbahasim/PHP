<?php
session_start();
if(isset($_SESSION['uname'])=='' || empty($_SESSION['uname']))
	{
	echo"<script>alert('Invalid username');
	window.location='../index.php';
	</script>";
	//header("location:../index.php");
	}
	else
	{
		$user=$_SESSION['uname'];
	}
?>

<?php include("../config/database.php");
$db=new connect();
$db->conn();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="showing.js"></script>

</head>
<body>


<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $user ?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> CATEGORY <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#view_cat"><i class="fa fa-angle-double-right"></i> View Category</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Add category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> PRODUCT <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> View product</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Add product </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-user-plus"></i>  USER</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa fa-question-circle"></i> FAQs</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome to Dashboard!</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" name="view_cat">
                <div class="col-sm-12 col-md-12" id="content">
                    <TABLE class="table table-bordred table-striped"> 
                        <TR>
                            <TH>id</TH>
                            <TH>CATEGORY NAME</TH>
                            <TH colspan="2" style="text-align:center">ACTION</TH>
                        </TR>
                <?php
                $count=1;
                $cat=$db->db_select("tblcat");
                while($row=mysqli_fetch_array($cat))
                {
                  echo "<TR>
                        <TD>$count</TD>
                        <TD>$row[1]</TD>

                        <TD><a href='update.php?edit=$row[0]' class='btn btn-info'>Update</a></TD>
                        <TD><a href='delete.php?del=$row[0]' class='btn btn-danger'>Delete</a></TD> 

                     </TR>";  
                      $count++;
                } 
              ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div><!-- /#wrapper -->

</body>
</html>


