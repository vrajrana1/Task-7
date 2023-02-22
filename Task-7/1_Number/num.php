<?php
$number = readline("Enter a number: ");

if (!is_numeric($number) || intval($number, '.') !== $number) {
    echo "Input must integer number </br>";
    exit();
}

$reverse = strrev($number);
echo "Reverse of $number is $reverse.\n";

$sum = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}
echo "Sum of digits of $number is $sum.\n";

$average = $sum / strlen($number);
echo "Average of digits of $number is $average.\n";
?>