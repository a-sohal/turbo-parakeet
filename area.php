<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area of a Rectangle Calculator</title>
</head>
<body>
    <h2>Area of a Rectangle Calculator</h2>
    <h4>Author: Amrit Sohal</h4>
    <form method="POST" action="">
        <label for="length">Length:</label>
        <input type="text" id="length" name="length" required>
        <br>
        <label for="width">Width:</label>
        <input type="text" id="width" name="width" required>
        <br>
        <input type="submit" name="submit" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];
        $command = escapeshellcmd("python3 area.py $length $width");
        $output = shell_exec($command);
        echo "<h3>Result from Python script:</h3>";
        echo "<p>$output</p>";
    }
    ?>
</body>
</html>
