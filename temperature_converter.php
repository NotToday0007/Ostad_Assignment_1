<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" id="temperature" name="temperature" required>
        <br><br>
        <label for="conversion">Select Conversion:</label>
        <select id="conversion" name="conversion" required>
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celsius</option>
        </select>
        <br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];
        
        if ($conversion == "c_to_f") {
            $converted_temperature = ($temperature * 9/5) + 32;
            echo "<p>$temperature Celsius is $converted_temperature Fahrenheit</p>";
        } elseif ($conversion == "f_to_c") {
            $converted_temperature = ($temperature - 32) * 5/9;
            echo "<p>$temperature Fahrenheit is $converted_temperature Celsius</p>";
        }
    }
    ?>
</body>
</html>
