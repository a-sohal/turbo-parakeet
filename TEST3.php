<?php
include "dbconfig.php";
$con=mysqli_connect($hostname,$username, $password,$dbname)

$sql1 = "SELECT name from Test3_sohala where id='B02' and name = 'H+R' " ;
$result1=mysqli_query($con, $sql1);
print $result1;

$sql2 = "SELECT name from Test3_sohala where id='B02' and name = 'web's " ;
$result2=mysqli_query($con, $sql2);
print $result2;

$sql3 = "SELECT name from Test3_sohala where id='B04' and name = 'HR' " ;
$result3=mysqli_query($con, $sql3);
print $result3;

$sql4 = "SELECT name from Test3_sohala where id='B02' and name = 'HR' " ;
$result4=mysqli_query($con, $sql4);
print $result4;

?>