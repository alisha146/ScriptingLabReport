<?php
function calculateArea($base, $height, $shape) {
    // Normalize the shape input to lowercase
    $shape = strtolower($shape);

    // Check which shape to calculate area for
    if ($shape === "triangle") {
        return 0.5 * $base * $height;
    } elseif ($shape === "parallelogram") {
        return $base * $height;
    } else {
        return "Invalid shape provided. Please use 'triangle' or 'parallelogram'.";
    }
}

// Example usage:
echo calculateArea(15, 10, "triangle");      
echo "<br>";
echo calculateArea(20, 10, "parallelogram"); 
?>
