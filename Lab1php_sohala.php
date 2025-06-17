<?php
include "dbconfig.php";
$con=mysqli_connect($hostname,$username, $password,$dbname)
     or die("<br>Cannot connect to DB\n");
$query = "SELECT fname from dreamhome.Staff where sex='FF' and salary > 20000";
$result = mysqli_query($con,$query);
if($result) {
     if(mysqli_num_rows($result)>0)
         echo "Monkey\n";
    else
         echo "Tiger\n";
}
else
     echo "Dog\n";

mysqli_close($con);
?>