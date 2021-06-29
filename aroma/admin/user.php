<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Users
        </h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
        <form class="mt-4" method="get" action="user.php">
            <div class="input-group">
            <input class="form-control custom-shadow custom-radius border-0 bg-white" 
                type="search" placeholder="Search Username" aria-label="Search" name="search">
                <div class="input-group-append ">
                    <button class="btn custom-shadow custom-radius border-0 bg-white" type="submit" name="btnSearch">
                     <i class="form-control-icon" data-feather="search"></i>
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
 <div class="col-lg">
  <div class="card">
    <div class="card-body">
<!-- ============================================================== -->
<!-- Alert message -->
<!-- ============================================================== -->
    <?php 
        if (isset($_GET['msg'])) {
            $message=$_GET['msg'];
            if($message=="success")  {
                echo "<div class='alert alert-success alert-dismissible bg-success text-white border-0 fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>  Updated  </div>";
            }
            else if ($message=="error")  {
                echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>  Not Updated  </div>";
            }
        }
// <!-- ============================================================== -->
// <!-- Search button programming -->
// <!-- ============================================================== -->
        if(isset($_REQUEST['btnSearch'])){
            $search = $_GET['search'];
            $terms = explode(" ",$search); //to store the values in search bar in array seperated by spaces
            $query = "SELECT * FROM `tbluser` WHERE ";
            $i=0;
            foreach($terms as $each) {
                $i++;
                if($i==1){
                    $query .= "`name` LIKE '%$each%' AND `role`<>1 "; //dynamic query for 1 or more than 1 word
                }
                else{
                    $query .= "OR `name` LIKE '%$each%' AND `role`<>1 ";
                }
            }
            $result = $db->select_query($query);
            $num = mysqli_num_rows($result);
            if($num > 0 && $search!=""){
                echo "$num result(s) found for <b>$search</b> <br>"; 
            }
            else {
                echo "No result(s) found";
            }
        }else{
            $query = "SELECT * FROM `tbluser` WHERE `role`<>1";
            $result = $db->select_query($query);
        }
    ?>
        <div class="table-responsive">
         <table class="table">
            <thead class="bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="border border-primary">
                <?php
                $count=1;    
                while($row=mysqli_fetch_assoc($result))
                {                  
                    echo
                "<tr>
                    <td>$count</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[password]</td>
                    <td>$row[status]</td>
                    <td><a href='update_user.php?u_id=$row[id]' class='btn btn-success btn-rounded'>Update</a></td>
                    <td><a href='php/delete.php?u_id=$row[id]' class='btn btn-danger btn-rounded'>Delete</a></td>
                </tr>";
                $count++;
                } ?>
            </tbody>
         </table>
        </div>	
    </div>
  </div>
 </div>
</div>
<!-- row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>