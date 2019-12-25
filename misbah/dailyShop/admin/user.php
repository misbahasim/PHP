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
                            <TH>USER NAME</TH>
                            <TH>USER EMAIL</TH>
                            <TH>USER ROLE</TH>
                            <TH colspan="2" style="text-align:center">ACTION</TH>
                        </TR>
                <?php
                $count=1;
                $user=$db->db_select("tbluser");
                while($row=mysqli_fetch_array($user))
                {
                  echo "<TR>
                        <TD>$count</TD>
                        <TD>".$row['Name']."</TD>
                        <TD>".$row['email']."</TD>
                        <TD>".$row['role']."</TD>

                        <TD><a href='add_upd_cat.php?usedit=$row[0]' class='btn btn-info'>Update</a></TD>
                        <TD><a href='../php/delete.php?usdel=$row[0]' class='btn btn-danger'>Delete</a></TD> 

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
