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
                            <TH>SERIAL NO.</TH>
                            <TH>CATEGORY NAME</TH>
                            <TH colspan="2" style="text-align:center">ACTION</TH>
                        </TR>
                <?php
                $count=1;
                $cat=$db->db_select("tblcat");
                while($row=mysqli_fetch_array($cat))
                {
                  echo "<TR>
                        <TD>$count</TD>
                        <TD>$row[1]</TD>

                        <TD><a href='add_upd_cat.php?catedit=$row[0]' class='btn btn-info'>Update</a></TD>
                        <TD><a href='../php/delete.php?catdel=$row[0]' class='btn btn-danger'>Delete</a></TD> 

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


