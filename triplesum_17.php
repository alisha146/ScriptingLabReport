<?php
function computeSum($a, $b) {
    if ($a === $b) {
        return 3 * ($a + $b);
    } else {
        return $a + $b;
    }
}

// Example usage:
echo computeSum(5, 5);  // Output: 30 (because 5 + 5 = 10, then 3 * 10 = 30)
echo "<br>";
echo computeSum(4, 6);  
?>
