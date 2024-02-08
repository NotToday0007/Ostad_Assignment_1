<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Comparison Tool</title>
</head>
<body>
    <h2>Number Comparison Tool</h2>
    <form method="post" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" id="number1" name="number1" required>
        <br><br>
        <label for="number2">Enter the second number:</label>
        <input type="number" id="number2" name="number2" required>
        <br><br>
        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        
        $larger_number = $number1 >= $number2 ? $number1 : $number2;

        echo "<p>The larger number is: $larger_number</p>";
    }
    ?>
</body>
</html>
