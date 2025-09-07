<?php
function getValueByIndex($index, $array) {
    // Check if the index exists in the array
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Index not found in array.";
    }
}

// Example usage:
$myArray = ["BCA", "BIT", "CSIT"];
echo getValueByIndex(1, $myArray); 
echo "<br>";
echo getValueByIndex(5, $myArray); // Output: Index not found in array.
?>
