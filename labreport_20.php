<?php
function repeatFrontTwo($str) {
    if (strlen($str) < 2) {
        return $str;
    }

    $front = substr($str, 0, 2);
    return $front . $front . $front . $front;
}

// Sample Inputs and Outputs
echo repeatFrontTwo("Al sha") . "<br>";  
echo repeatFrontTwo("PHP") . "<br>";       
echo repeatFrontTwo("A") . "<br>";        
?>
