<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post" action="">
        <label for="score1">Test Score 1:</label>
        <input type="number" id="score1" name="score1" required>
        <br><br>
        <label for="score2">Test Score 2:</label>
        <input type="number" id="score2" name="score2" required>
        <br><br>
        <label for="score3">Test Score 3:</label>
        <input type="number" id="score3" name="score3" required>
        <br><br>
        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        $average = ($score1 + $score2 + $score3) / 3;
        $grade = '';
        if ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 70) {
            $grade = 'B';
        } elseif ($average >= 60) {
            $grade = 'C';
        } elseif ($average >= 50) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>
</html>
