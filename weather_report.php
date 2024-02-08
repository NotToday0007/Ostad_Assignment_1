<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h2>Weather Report</h2>

    <?php
    $temperature = 20;
    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature > 0 && $temperature <= 15) {
        echo "<p>It's cool.</p>";
    } elseif ($temperature > 15 && $temperature <= 25) {
        echo "<p>It's warm.</p>";
    } else {
        echo "<p>It's hot!</p>";
    }
    ?>
</body>
</html>
