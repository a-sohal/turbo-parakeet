CTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP to Python</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #e0f7fa; /* Soft teal background */
            margin: 0;
            padding: 0;
        }
        .calculator-container {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            padding: 2rem 2rem 1rem 2rem;
            width: 320px;
            margin: 60px auto;
        }
        h1 {
            text-align: center;
            color: #00796b;
            font-weight: 700;
            margin-top: 0;
        }
        label {
            color: #333;
            font-weight: 500;
        }
        input[type="text"], input[type="submit"] {
            font-family: inherit;
            font-size: 1rem;
        }
        input[type="text"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border-radius: 6px;
            border: 1px solid #b2dfdb;
        }
        input[type="submit"] {
            background: #00796b;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 0.6rem;
            width: 100%;
            cursor: pointer;
            font-weight: 700;
        }
        .result {
            margin-top: 1rem;
            background: #b2ebf2;
            padding: 1rem;
            border-radius: 6px;
            color: #004d40;
            text-align: center;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="calculator-container">
        <h1>PHP to Python</h1>

</head>
<body>
<form method="POST" action="">
<label for="num1">Number 1:</label>
<input type="text" id="num1" name="num1">
<br>
<label for="num2">Number 2:</label>
<input type="text" id="num2" name="num2">
<br>
<input type="submit" name="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
// Prepare the command to run the Python script
$command = escapeshellcmd("python3 sum.py $num1 $num2");
// Execute the Python script and capture the output
$output = shell_exec($command);
// Display the result
echo "<h3>Result from Python script:</h3>";
echo "<p>$output</p>";
}
?>
</body>
</html>

