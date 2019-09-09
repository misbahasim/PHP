<?php
$arr[0]="abc";
$arr[1]="xyz";
$arr[2]="pqr";
$arr[3]="lmo";
$hob=implode(",",$arr);
echo $hob.'<br>';
$array=explode(",",$hob);
print_r($array);
?>