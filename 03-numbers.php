<?php
//declaring
$a = 12;
$b = 6;
$c = 1.2;

//  arithmetic
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

//assignment with math operator
$a += $b;
echo $a . '<br>';

//increase operator

echo $a . '<br>';
echo ++$a . '<br>';

//decrease

//number checking function is_int() and is_float(), is_double() t-f
is_numeric("3.4");//true
is_numeric("3fd.3");//false

//conversion
$strNumber = '12.33';
$floatNumber = (float) $strNumber;
var_dump($floatNumber) . '<br>';//float(12.33)
echo '<br>';

//number function
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';