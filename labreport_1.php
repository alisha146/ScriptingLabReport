<?php
// 1. Create variables with different data types
$intVar = 10;                 // Integer
$floatVar = 15.5;             // Float
$stringVar = "Hello PHP";     // String
$boolVar = true;              // Boolean
$arrayVar = array("Red", "Green", "Blue"); // Indexed Array
$nullVar = null;              // NULL

// 2. Print all the data using echo and print
echo "Integer: $intVar<br>";
echo "Float: $floatVar<br>";
print "String: $stringVar<br>";
echo "Boolean: $boolVar<br>"; // true will print 1, false prints nothing
echo "Null: $nullVar<br>";    // Will print nothing

echo "<hr>";

// 3. Display array using print_r and var_dump
echo "Using print_r:<br>";
print_r($arrayVar);
echo "<br><br>";

echo "Using var_dump:<br>";
var_dump($arrayVar);
echo "<hr>";

// 4. Check data types using gettype() and is_* functions
echo "Data Type Checks:<br>";
echo "intVar is of type: " . gettype($intVar) . "<br>";
echo "floatVar is float? " . (is_float($floatVar) ? "Yes" : "No") . "<br>";
echo "stringVar is string? " . (is_string($stringVar) ? "Yes" : "No") . "<br>";
echo "boolVar is boolean? " . (is_bool($boolVar) ? "Yes" : "No") . "<br>";
echo "arrayVar is array? " . (is_array($arrayVar) ? "Yes" : "No") . "<br>";
echo "nullVar is null? " . (is_null($nullVar) ? "Yes" : "No") . "<br>";
?>
