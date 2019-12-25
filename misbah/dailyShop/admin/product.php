<?php 
    include("../config/database.php");
    $db=new connect();
    include("dashboard.php");
?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main">
                <div class="col-sm-12 col-md-12" id="content">
                    <TABLE class="table table-bordred table-striped"> 
                        <TR>
                            <TH>PRODUCT CODE</TH>
                            <TH> NAME</TH>
                            <TH> PRICE</TH>
                            <TH>QUANTITY</TH>
                            <TH> CATEGORY</TH>
                            <TH colspan="2" style="text-align:center">ACTION</TH>
                        </TR>
                <?php
                $count=1;
                $pro=$db->db_select("tblproduct");
                while($row=mysqli_fetch_array($pro))
                {
                  $cat=$db->select_cat($row['cid']);
                  $show_cat=mysqli_fetch_array($cat);

                  echo "<TR>
                        <TD>".$row['product code']."</TD>
                        <TD>".$row['name']."</TD>
                        <TD>".$row['price']."</TD>
                        <TD>".$row['quantity']."</TD>
                        <TD>$show_cat[0]</TD>

                        <TD><a href='pro_add_upd.php?proedit=$row[0]' class='btn btn-info'>Update</a></TD>
                        <TD><a href='../php/delete.php?prodel=$row[0]' class='btn btn-danger'>Delete</a></TD> 

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