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
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Update Category</h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php" class="text-muted">Category</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Update Category</li>
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
if (isset($_GET['c_id'])) {
    $id=$_GET['c_id'];
    $select=$db->select_query("SELECT * FROM `tblcat` WHERE `id`=$id");
    $row=mysqli_fetch_array($select);
    $c_id=$row['id'];
    $cat=$row['category'];
}
?>
<div class="row">
    <div class="col-sm-10">
        <div class="card">
            <div class="card-body">
                <form class="mt-3 form-horizontal" method="post" action="php/all_code.php">
                    <div class="form-group row">
                        <input type="hidden" name="txtid" value="<?php echo $c_id ?>">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10"> 
                            <input type="text" name="txtcat" class="form-control" value="<?php echo $cat; ?>" pattern="[a-zA-Z ]+" required> 
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <input type="submit" name="btnUpdCategory" class="btn btn-info" value="Update">
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