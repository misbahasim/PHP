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
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Update User</h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                    <li class="breadcrumb-item"><a href="user.php" class="text-muted">User</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Update User</li>
                </ol>
            </nav>
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
<?php 
if (isset($_GET['u_id'])) {
    $id=$_GET['u_id'];
    $select=$db->select_query("SELECT * FROM `tbluser` WHERE `id` =$id");
    $row=mysqli_fetch_array($select);
    $id=$row['id'];
    $name=$row['name'];
    $mail=$row['email'];
    $pass=$row['password'];
    $status=$row['status'];
}
?>
<div class="row">
    <div class="col-sm-10">
        <div class="card">
            <div class="card-body">
                <form class="mt-3 form-horizontal" action="php/all_code.php" method="post">
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="u_id" value="<?php echo $id; ?>">
                            <input type="text" class="form-control" value="<?php echo $name; ?>" name="u_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="<?php echo $mail; ?>" name="u_mail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="Password" class="form-control" value="<?php echo $pass; ?>" name="u_pass">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="u_status" class="form-control">
                                <option value="Enabled"
                                <?php if ($status=="Enabled") { echo "selected"; } ?>
                                >Enabled</option>
                                <option value="Disabled"
                                <?php if ($status=="Disabled") { echo "selected"; } ?>
                                >Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <input type="submit" name="btnUpdUser" class="btn btn-info" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</div>
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