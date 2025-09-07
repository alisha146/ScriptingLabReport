<?php
function carsNeeded($people) {
    // Each car can hold 5 people
    $carCapacity = 5;

    // Use ceiling division to round up
    return ceil($people / $carCapacity);
}

// Example usage:
echo carsNeeded(4);   // Output: 1
echo "<br>";
echo carsNeeded(5);   // Output: 1
echo "<br>";
echo carsNeeded(11);  // Output: 3
?>
