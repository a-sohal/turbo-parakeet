<?php
include "dbconfig.php";
$con=mysqli_connect($hostname,$username, $password,$dbname)
     or die("<br>Cannot connect to DB\n");
$query = "SELECT * FROM dreamhome.Staff";
$result = mysql_query($con, $query)
     or die("<br>query failed\n");
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "  <meta charset='UTF-8'>";
echo "  <title>Display Staff</title>";
echo "  <style>
          table { border-collapse: collapse; margin: 1em auto; }
          th, td { border: 1px solid #000; padding: 6px 10px; }
          th { background-color: #eee; }
        </style>";
echo "</head>";
echo "<body>";
echo "<h2 style='text-align:center;'>Staff Table</h2>";
if (mysqli_num_rows($result) > 0) {
 	 echo "<table>";
 	 echo "<tr>";
     echo "  <th>StaffNo</th>";
     echo "  <th>fName</th>";
     echo "  <th>lName</th>";
     echo "  <th>position</th>";
     echo "  <th>sex</th>";
     echo "  <th>DOB</th>";
     echo "  <th>salary</th>";
     echo "  <th>branchNo</th>";
     echo "</tr>";
     while ($row = mysqli_fetch_assoc($result)) {
         $sexColor = ($row["sex"] === "M") ? "blue" : "red";
     echo "<tr>";
     echo "  <td>" . $row["staffNo"] . "</td>";
     echo "  <td>" . $row["fName"]   . "</td>";
     echo "  <td>" . $row["lName"]   . "</td>";
     echo "  <td>" . $row["position"] . "</td>";
     echo "  <td style='color: $sexColor;'>" . $row["sex"] . "</td>";
     echo "  <td>" . $row["DOB"]     . "</td>";
     echo "  <td>" . number_format($row["salary"], 2) . "</td>";
     echo "  <td>" . $row["branchNo"] . "</td>";
     echo "</tr>";
     }
     echo "</table>";
}
mysql_free_result($result);
mysql_close($con);
echo "</body></html>";
?>