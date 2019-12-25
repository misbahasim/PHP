<?php 
  include("../config/database.php");
  $db=new connect();
  include("dashboard.php");

  if (isset($_GET['catedit'])) 
  {  
    $id=$_GET['catedit'];  
    $record = $db->db_select_table("tblcat",$id);

    if (count($record) == 1 ) {
      $row = mysqli_fetch_array($record);
      $catname  = $row['category'];
    }
  }
  else
  {
    $catname="";
    $id="";
  }
?>

<form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <input type="hidden" name="catid" value="<?php echo $id; ?>">
  <label class="col-md-4 control-label" for="product_name">CATEGORY NAME</label>  
  <div class="col-md-4">
  <input id="category_name" name="category_name" placeholder="CATEGORY NAME" class="form-control input-md" required="" type="text" value="<?php echo $catname; ?>">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" name="btnSubmit" class="btn btn-primary" value="SAVE">
  </div>
</div>

</fieldset>
</form>

</div><!-- /#wrapper -->


</body>
</html>

<?php 
$id="";

if(isset($_POST['btnSubmit']))
  {
    $category = $_POST['category_name'];
    $id=$_POST['catid'];

    if($id!="")
    {
      $insert = $db->db_update("UPDATE tblcat SET `category`= '$category' WHERE id = $id");
      header("location:category.php");
    }
    else
    {
      $insert = $db->db_insert("INSERT INTO tblcat(`category`) VALUES ('$category')");
      header("location:category.php");
    }
  } 
?>

