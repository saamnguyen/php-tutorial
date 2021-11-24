<?php
//what is a variables?

//variables types
/*
 * String
 * Integer
 * Float/Double
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */

//declare variables
$name = 'Nguyen Van Sam';
$age = 20;
$isMale = true;
$height = 1.7;
$salary = null;

//Print variables
echo $name.'<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

//Print types of the variables

echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

//print the whole variables
var_dump($name . '<br>', $age, $height, $isMale, $salary) . '<br>';

//change variables
$name = true;
echo $name;

//check variables function true - false
echo is_string($name);
is_int($age);

//check if variables is defined
isset($name);//true
isset($address);//false

//constants
// define(name, value)
define('PI', 3.14);
echo '<br>' . PI;

//using php built-in constants
echo SORT_ASC . '<br>'; //sap xep
echo PHP_INT_MAX . '<br>'; //in so on nhat ma php co the chua 9223372036854775807
