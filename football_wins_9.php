<!DOCTYPE html>
<html>
<head>
    <title>Football Points Calculator</title>
</head>
<body>

<h2>Football Team Points Calculator</h2>

<form method="post">
    <label for="wins">Number of Wins:</label>
    <input type="number" name="wins" id="wins" required>
    <br>

    <label for="draws">Number of Draws:</label>
    <input type="number" name="draws" id="draws" required>
    <br>

    <label for="losses">Number of Losses:</label>
    <input type="number" name="losses" id="losses" required>
    <br>

    <input type="submit" value="Calculate Points">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input values and validate
    $wins = isset($_POST['wins']) ? (int)$_POST['wins'] : 0;
    $draws = isset($_POST['draws']) ? (int)$_POST['draws'] : 0;
    $losses = isset($_POST['losses']) ? (int)$_POST['losses'] : 0;

    // Calculate points
    $totalPoints = ($wins * 3) + ($draws * 1); // Losses contribute 0 points

    echo "<h3>Total Points: $totalPoints</h3>";
}
?>

</body>
</html>
