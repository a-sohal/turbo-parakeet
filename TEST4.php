<?php
include "dbconfig.php";
$con=mysqli_connect($hostname,$username, $password,$dbname)
     or die("<br>Cannot connect to DB\n");

$sql1 = " update Test4_sohala set name='test4' where id = B05 ";

$sql2 = " update Test4_sohala set name='test4' where id = NULL ";

$sql3 = " update Test4_sohala set name='test4' where id = B04 ";

$sql4 = " update Test4_sohala set name='test4' where id = NULL ";

$queries = [$sql1, $sql2, $sql3, $sql4];
foreach ($queries as $index => $sql) {
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Query " . ($index + 1) . " executed successfully.<br>";
    } else {
        echo "Error in Query " . ($index + 1) . ": " . mysqli_error($con) . "<br>";
    }
}


mysqli_close($con);
?>