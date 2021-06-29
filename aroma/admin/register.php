<?php
include '../config/database.php';
$db=new Connect();

$name=$_POST['u_name'];
$email=$_POST['u_mail'];
$pass=$_POST['u_pass'];
$cpass=$_POST['confirmPassword'];

if($name && $email && $pass && $cpass){
    if($pass==$cpass){
        $unique_name=$db->select_query("SELECT `name` FROM `tbluser` WHERE `name`= '$name'");
        $count=mysqli_num_rows($unique_name);
        if($count!=0){
            header("location:../register.php?msg=unique_name");
        }else{
            $unique_mail=$db->select_query("SELECT `email` FROM `tbluser` WHERE `email`= '$email'");
            $checkmail=mysqli_num_rows($unique_mail);
            if($checkmail!=0){
                header("location:../register.php?msg=unique_mail");
            }
            else{
                $passmd5=md5($pass);
                $query=$db->db_insert("INSERT INTO `tbluser`(`name`, `email`, `password`) VALUES ('$name','$email','$passmd5')");
                if ($query) {
                    header("location:../login.php?msg=success");
                }
            else {  header("location:../register.php?msg=error");  }
            }
        }
    }
    else{  header("location:../register.php?msg=mismatch");  }
}
else{  header("location:../register.php?msg=empty");  }

?>