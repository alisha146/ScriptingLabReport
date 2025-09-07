<?php
function diffFrom51($n) {
    $diff = abs($n - 51);

    if ($n > 51) {
        return 3 * $diff;
    } else {
        return $diff;
    }
}

// Example usage:
echo diffFrom51(30); // Output: 21 (since |30 - 51| = 21)
echo "<br>";
echo diffFrom51(60); // Output: 27 (since |60 - 51| = 9, and 3 * 9 = 27)
?>
