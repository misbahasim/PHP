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
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add User</h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Add User</li>
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
    <div class="col-sm-11">
        <div class="card">
            <div class="card-body">
            <?php 
                if (isset($_GET['msg'])) {
                    $message=$_GET['msg'];
                    if($message=="success")
                    {
                    echo "<div class='alert alert-success alert-dismissible bg-success text-white border-0 fade show' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>Inserted
                        </div>";
                    }
                    else if ($message=="error") 
                    {
                    echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                            </button>Not inserted
                        </div>";
                    }
                }
                ?>
                <form class="mt-3 form-horizontal" method="post" action="php/all_code.php">
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="u_name" class="form-control" required="" 
                            pattern="[a-zA-Z ]+" minlength="3" maxlength="20">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="u_mail" class="form-control" placeholder="abc@example.com" 
                            required="" required pattern="[a-zA-Z_][a-zA-Z0-9.]+@[a-z]+\.[a-z]{2,4}$">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="Password" name="u_pass" class="form-control" required="" 
                            pattern="[a-zA-Z0-9!@#$&*]+" minlength="9" maxlength="15">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="Password" name="c_pass" class="form-control" required=""
                             pattern="[a-zA-Z0-9!@#$&*]+" minlength="9" maxlength="15">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select name="u_status" class="form-control" required="">
                                <option value="">Select Status</option>
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <input type="submit" name="btnAddUser" class="btn btn-info" value="Add">
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