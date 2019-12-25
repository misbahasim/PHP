<?php
	/*include("../config/database.php");
    $db=new connect();
    $db->conn();
	include 'index.php';

  if (isset($_GET['proedit'])) 
  {  
    $id=$_GET['proedit'];  
    $record = $db->db_select_table("tblproduct",$id);

    if (count($record) == 1 ) {
      $row = mysqli_fetch_array($record);
      $p_id        = $row['id'];
      $p_code      = $row['product code'];
      $p_name      = $row['name'];
      $p_price     = $row['price'];
      $p_quantity  = $row['quantity'];
      $p_cat       = $row['cid'];
    }
  }
  else
  {
    $p_id        = "";
    $p_code      = "";
    $p_name      = "";
    $p_price     = "";
    $p_quantity  = "";
    $p_cat       = "";
  }*/
?>

<form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>

<input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="hidden" value="<?php echo $p_id; ?>">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_code">PRODUCT CODE</label>  
  <div class="col-md-4">
  <input id="product_id" name="product_code" placeholder="PRODUCT CODE" class="form-control input-md" required="" type="text" value="<?php echo $p_code; ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text" value="<?php echo $p_name; ?>">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input id="percentage_price" name="product_price" placeholder="PRODUCT PRICE" class="form-control input-md" required="" type="text" value="<?php echo $p_price; ?>">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text" value="<?php echo $p_quantity; ?>">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_category" class="form-control">
    	 <?php
    		$cat=$db->db_select("tblcat");
    		while($row=mysqli_fetch_array($cat))
          { ?>
          	<option value='<?php echo "$row[0]";?>' 
              <?php if($row[0]==$p_cat){ echo "selected";}?>>
              <?php echo"$row[1]";?>
            </option>
         <?php } ?>
    	?>
    </select>
  </div>
</div>
    
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">UPLOAD IMAGE</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" name="btnSubmit" value="SAVE" class="btn btn-primary">
  </div>
</div>

</fieldset>
</form>

</div><!-- /#wrapper -->

<?php
/*
if(isset($_POST['btnSubmit']))
  {
    $pid       = $_POST['product_id'];
    $pcode     = $_POST['product_code'];
    $pname     = $_POST['product_name'];
    $pprice    = $_POST['product_price'];
    $pquantity = $_POST['available_quantity'];
    $pcat      = $_POST['product_category'];

    if($pid!="")
    {
      echo "<script>alert('updated')</script>";
      header("location:product.php");
    }
    else
    {
      echo "<script>alert('inserted')</script>";
      header("location:product.php");
    }
  } */
?>

</body>
</html>