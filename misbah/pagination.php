<?php 
// include("config/database.php");
// $db=new connect();
// session_start();

// if(isset($_COOKIE['aroma'])){
//     echo "cookie has been set";
// }
// $_SESSION['uname'] = $_COOKIE['aroma'];
// $query = $db->select_query("SELECT `role` FROM `tbluser` WHERE `name`='$_SESSION[uname]' ");
//   $row = mysqli_fetch_array($query);
//   $_SESSION['urole']=$row['role'];
//   echo $_SESSION['urole'];



$con=mysqli_connect("localhost","root","","ecommerce");

$per_page=3;
$pages_query=mysqli_query($con,"SELECT COUNT(`id`) FROM `product`");
$row = mysqli_fetch_array($pages_query);
$pages = ceil($row[0] / $per_page);

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1 ;
$start= ($page -1) * $per_page;

$query=mysqli_query($con,"select name from `product` LIMIT $start, $per_page");

while($query_row=mysqli_fetch_assoc($query)){
    echo "$query_row[name]<br>";
}

$prev=$page-1;
$next=$page+1;

if (!($page<=1)) {
    echo "<a href='pagination.php?page=$prev'>Prev</a> ";
}

if($pages >=1){
    for ($i=1; $i < $pages; $i++) { 
        echo ($i==$page) ? '<b><a href="?page='.$i.'">'.$i.'</a><b> ' : '<a href="?page='.$i.'">'.$i.'</a> ';
    }
}

if (!($page>=$pages)) {
    echo "<a href='pagination.php?page=$next'>Next</a> ";
}

?>