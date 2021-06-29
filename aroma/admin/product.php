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
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Products
        </h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
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
            if($message=="success"){
                echo "<div class='alert alert-success alert-dismissible bg-success text-white border-0 fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>  Updated  </div>";
            }
            else if ($message=="error") {
                echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>  Not Updated  </div>";
            }
        }
        ?>
<!-- ============================================================== -->
<!-- End Alert message -->
<!-- ============================================================== -->
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="border border-primary">
            <?php
                $per_page = 5;
                $pages_query = $db->select_query("SELECT COUNT(`id`) FROM `product`");
                $row = mysqli_fetch_array($pages_query);
                $pages = ceil($row[0] / $per_page);
                
                $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1 ;
                $start = ($page -1) * $per_page;

                $query = $db->select_query("SELECT * FROM `product` LIMIT $start, $per_page");
                $count=1;
                while ($row=mysqli_fetch_assoc($query)) {
                    echo
                    "<tr>
                        <td>$count</td>
                        <td><img src='../img/$row[product_image]' height='50px' width='50px'></td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td>$row[Availibility]</td>
                        <td>
                            <a href='update_product.php?p_id=$row[id]' class='btn btn-success btn-rounded'>Update</a>
                        </td>
                        <td>
                            <a href='php/delete.php?p_id=$row[id]' class='btn btn-danger btn-rounded'> Delete</a> 
                        </td>
                    </tr>";
                    $count++;
                    }
            ?>
                </tbody>
            </table>
        </div>
<!-- ============================================================== -->
<!-- Pagination -->
<!-- ============================================================== -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            <?php
            $prev = $page-1;
            $next = $page+1;
            
            if (!($page <= 1)) {
                echo "<li class='page-item'><a class='page-link'
                href='product.php?page=$prev'>Previous</a></li>";
            }
            
            if($pages >= 1){
                for ($i=1; $i <= $pages; $i++) { 
                echo ($i==$page) ? '<li class="page-item"><b><a class="page-link" href="?page='.$i.'">'.$i.'</a></b></li>' : '<li class="page-item"><a class="page-link"
                href="?page='.$i.'">'.$i.'</a></li>';
                }
            }
            if (!($page>=$pages)) {
                echo "<li class='page-item'><a class='page-link'
                href='product.php?page=$next'>Next</a></li>";
            } 
            ?>
            </ul>
        </nav>
<!-- ============================================================== -->
<!-- End Pagination -->
<!-- ============================================================== -->
     </div>
    </div>
 </div>
</div>
<!-- row -->
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
<?php include 'footer.php'; ?>