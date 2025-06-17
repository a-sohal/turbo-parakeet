<?php

$con = mysqli_connect("imc.kean.edu","sohala","1108193","CPS3740_2025S");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get parameters from the URL
if (isset($_GET['code']) && isset($_GET['tel'])) {
    $code = mysqli_real_escape_string($con, $_GET['code']);
    $tel = mysqli_real_escape_string($con, $_GET['tel']);

    // Build SQL query
    $sql = "UPDATE Lab2program_sohala SET tel = '$tel' WHERE code = '$code'";

    // Execute query
    if (mysqli_query($con, $sql)) {
        if (mysqli_affected_rows($con) > 0) {
            echo "Phone number for department code '$code' was successfully updated to '$tel'.";
        } else {
            echo "No rows were updated. Make sure the department code '$code' exists.";
        }
    } else {
        echo "Error updating phone number: " . mysqli_error($con);
    }
} else {
    echo "Missing required GET parameters: 'code' and 'tel'.";
}

// Close connection
mysqli_close($con);
?>


