<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- ============================================================== -->
<!-- Page wrapper  cookie working inside dashboard validations all -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add Product</h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Add Product</li>
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

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
            <?php 
                if (isset($_GET['msg'])) {
                    $message=$_GET['msg'];
                    if($message=="success") {
                        echo "<div class='alert alert-success alert-dismissible bg-success text-white border-0 fade show' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>  Inserted  </div>";
                        }
                    else if ($message=="error") {
                        echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>  Not inserted  </div>";
                        }
                }
            ?>
                <form class="mt-3 form-horizontal" action="php/all_code.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="p_name" class="form-control" required="" placeholder="Product name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="p_price" class="form-control" placeholder="100.50" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select name="p_cat" class="form-control" required="">
                                <option value="">Select Category</option>
                                <?php
                                $category=$db->db_select("tblcat");
                                while($row=mysqli_fetch_array($category))
                                {
                                    echo"<option value='$row[id]'>$row[category]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Availability</label>
                        <div class="col-sm-10">
                            <select name="p_avail" class="form-control" required="">
                                <option value="">Select option</option>
                                <option value="In Stock">In stock</option>
                                <option value="Not in stock">Not in stock</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                             <textarea name="p_desc" class="form-control" rows="3" placeholder="Description Here..." required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="p_image" class="custom-file-input" required="">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <input type="submit" name="btnAddProduct" class="btn btn-info" value="Add">
                            <button type="reset" class="btn btn-dark">Reset</button>
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