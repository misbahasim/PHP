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
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Update Product</h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                    <li class="breadcrumb-item"><a href="product.php" class="text-muted">Product</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Update Product</li>
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
if (isset($_GET['p_id'])) 
{
    $id=$_GET['p_id'];
    $select=$db->select_query("SELECT * FROM `product`  WHERE `id`=$id");
	$row=mysqli_fetch_array($select);
	$pro_id=$row['id'];
    $p_img=$row['product_image'];
    $name=$row['name'];
    $price=$row['price'];
    $cat=$row['category'];
    $avail=$row['Availibility'];
    $desc=$row['Description'];
}
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form class="mt-3 form-horizontal" action="php/all_code.php" method="post">
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        	<input type="hidden" name="p_id" value="<?php echo $pro_id; ?>">
                            <input type="text" name="p_name" class="form-control" value="<?php echo $name; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="p_price" class="form-control" value="<?php echo $price; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select name="p_cat" class="form-control">
                                <?php
                                $category=$db->db_select("tblcat");
                                while($row=mysqli_fetch_array($category))
                                {?>
                                    <option value='<?php echo "$row[id]";?>'
                                    <?php if($row['id']==$cat){ echo "selected";}?>>
              						<?php echo"$row[category]";?> 
                                    </option>";
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Availability</label>
                        <div class="col-sm-10">
                            <select name="p_avail" class="form-control">
	                            <option value="In Stock" 
	                            <?php if($avail=="In Stock"){ echo "selected";}?> >
	                        		In stock</option>
	                            <option value="Not in stock"
	                            <?php if($avail=="Not in stock"){ echo "selected";}?>
	                            >Not in stock</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                             <textarea class="form-control" name="p_desc" rows="3"><?php echo $desc; ?></textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Present Image</label>
                        <div class="col-sm-10">
                        	<img src="../img/<?php echo $p_img; ?>" height='100px' width='100px'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalSuccess"
                            class="col-sm-2 col-form-label">Choose another Image</label>
                        <div class="col-sm-10">
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="p_image" class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <input type="submit" name="btnUpdProduct" class="btn btn-info" value="Update">
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