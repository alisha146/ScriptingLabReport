<?php
function areLengthsEqual($str1, $str2) {
    return strlen($str1) === strlen($str2);
}

// Example usage:
echo areLengthsEqual("DSA", "WEB") ? 'true' : 'false';  // Outputs: true
echo "<br>";
echo areLengthsEqual("hello", "world!") ? 'true' : 'false'; // Outputs: false
?>
