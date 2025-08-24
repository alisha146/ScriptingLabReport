<?php
// Define PI as a constant
define("PI", 3.14159);

// Take input from user (only works in command line or HTML form)
$radius = 5; // You can replace this with dynamic input if needed

// Calculate area
$area = PI * $radius * $radius;

// Output
echo "Radius: $radius<br>";
echo "Area of the circle: " . $area ;
?>
