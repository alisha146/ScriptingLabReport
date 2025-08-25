<?php
$totalLegs = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values and ensure they are integers
    $chickens = isset($_POST['chickens']) ? (int)$_POST['chickens'] : 0;
    $cows = isset($_POST['cows']) ? (int)$_POST['cows'] : 0;
    $pigs = isset($_POST['pigs']) ? (int)$_POST['pigs'] : 0;

    // Calculate total legs
    $totalLegs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate Total Animal Legs</title>
</head>
<body>
    <h1>Animal Legs Calculator</h1>
    <form method="post" action="">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" name="chickens" id="chickens" min="0" required>
        <br>

        <label for="cows">Number of Cows:</label>
        <input type="number" name="cows" id="cows" min="0" required>
        <br>

        <label for="pigs">Number of Pigs:</label>
        <input type="number" name="pigs" id="pigs" min="0" required>
        <br>

        <input type="submit" value="Calculate Legs">
    </form>

    <?php if ($totalLegs !== null): ?>
        <h2>Total number of legs: <?php echo $totalLegs; ?></h2>
    <?php endif; ?>
</body>
</html>
