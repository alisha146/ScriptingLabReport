<?php
function addIfPrefix($str) {
    // Check if the string starts with 'if'
    if (substr($str, 0, 2) === "if") {
        return $str;
    } else {
        return "if " . $str;
    }
}

// Sample Inputs and Outputs
echo addIfPrefix("if else") . "<br>";  // Output: if else
echo addIfPrefix("else") . "<br>";     // Output: if else
echo addIfPrefix("if") . "<br>";       // Output: if
?>
