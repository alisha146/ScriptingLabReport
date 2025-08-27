<?php
function recursiveStrLen($str, $index = 0) {
    // Base case: if the character at current index is not set, we've reached the end
    if (!isset($str[$index])) {
        return 0;
    }

    // Recursive case: count current character and move to the next
    return 1 + recursiveStrLen($str, $index + 1);
}

// Example usage
echo recursiveStrLen("Hello i am Alisha"); 
?>
