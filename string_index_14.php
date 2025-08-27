<?php
function findStringIndex($array, $string) {
    // Use array_search to find the index
    $index = array_search($string, $array);

    // If the string is not found, array_search returns false
    if ($index === false) {
        return -1;
    }

    return $index;
}

// Example usage:
$myArray = ["apple", "banana", "cherry"];
echo findStringIndex($myArray, "banana"); 
echo "<br>";
echo findStringIndex($myArray, "cherry");
echo "<br>";
echo findStringIndex($myArray, "grape");  
?>
