<?php

// Arithmetic Operators
$num1 = 10;
$num2 = 5;

$sum = $num1 + $num2;   // Addition
$diff = $num1 - $num2;  // Subtraction
$prod = $num1 * $num2;  // Multiplication
$quotient = $num1 / $num2;  // Division
$modulus = $num1 % $num2;   // Modulus

// Comparison Operators
$comp1 = 10;
$comp2 = "10";

$is_equal = ($comp1 == $comp2);          // Equal
$is_identical = ($comp1 === $comp2);     // Identical
$is_not_equal = ($comp1 != $comp2);      // Not Equal
$is_not_identical = ($comp1 !== $comp2); // Not Identical
$is_greater = ($comp1 > $comp2);         // Greater than
$is_less = ($comp1 < $comp2);            // Less than

// Logical Operators
$logical1 = true;
$logical2 = false;

$and_result = $logical1 && $logical2; // Logical AND
$or_result = $logical1 || $logical2;  // Logical OR
$not_result = !$logical1;             // Logical NOT

// Assignment Operators
$assignment_variable = 5;

$assignment_variable += 3; // Add and assign
$assignment_variable -= 2; // Subtract and assign
$assignment_variable *= 4; // Multiply and assign
$assignment_variable /= 2; // Divide and assign

// Increment and Decrement Operators
$increment_var = 10;
$decrement_var = 5;

$increment_var++; // Increment by 1
$decrement_var--; // Decrement by 1

// Concatenation Operator
$str1 = "Hello";
$str2 = " World";

$concatenated_str = $str1 . $str2; // Concatenate strings

// Bitwise Operators
$bitwise1 = 5; // 101 in binary
$bitwise2 = 3; // 011 in binary

$bitwise_and = $bitwise1 & $bitwise2; // Bitwise AND
$bitwise_or = $bitwise1 | $bitwise2;  // Bitwise OR
$bitwise_xor = $bitwise1 ^ $bitwise2; // Bitwise XOR
$bitwise_not = ~$bitwise1;            // Bitwise NOT

// Error Control Operator
$file = @fopen('nonexistentfile.txt', 'r'); // Suppress error messages

// Ternary Operator
$age = 20;
$is_adult = ($age >= 18) ? "Adult" : "Minor";

// Output Results with <br>
echo "Arithmetic Operators:<br>";
echo "Sum: $sum<br>";
echo "Difference: $diff<br>";
echo "Product: $prod<br>";
echo "Quotient: $quotient<br>";
echo "Modulus: $modulus<br><br>";

echo "Comparison Operators:<br>";
echo "Equal: " . ($is_equal ? 'true' : 'false') . "<br>";
echo "Identical: " . ($is_identical ? 'true' : 'false') . "<br>";
echo "Not Equal: " . ($is_not_equal ? 'true' : 'false') . "<br>";
echo "Not Identical: " . ($is_not_identical ? 'true' : 'false') . "<br>";
echo "Greater than: " . ($is_greater ? 'true' : 'false') . "<br>";
echo "Less than: " . ($is_less ? 'true' : 'false') . "<br><br>";

echo "Logical Operators:<br>";
echo "AND: " . ($and_result ? 'true' : 'false') . "<br>";
echo "OR: " . ($or_result ? 'true' : 'false') . "<br>";
echo "NOT: " . (!$not_result ? 'true' : 'false') . "<br><br>";

echo "Assignment Operators:<br>";
echo "Result: $assignment_variable<br><br>";

echo "Increment and Decrement Operators:<br>";
echo "Incremented: $increment_var<br>";
echo "Decremented: $decrement_var<br><br>";

echo "Concatenation Operator:<br>";
echo "Concatenated String: $concatenated_str<br><br>";

echo "Bitwise Operators:<br>";
echo "Bitwise AND: $bitwise_and<br>";
echo "Bitwise OR: $bitwise_or<br>";
echo "Bitwise XOR: $bitwise_xor<br>";
echo "Bitwise NOT: $bitwise_not<br><br>";

echo "Error Control Operator:<br>";
echo "Check the code comments for explanation.<br><br>";

echo "Ternary Operator:<br>";
echo "Is Adult? $is_adult<br>";
?>
