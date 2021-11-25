<?php
$string1 = "Sam";
$string2 = "Nguyen";

echo $string1 . '<br>';
echo $string2 . '<br>';
echo "I am $string1. I am 20 years old" . '<br>'; //I am Sam. I am 20 years old
echo 'I am $string1. I am 20 year old'. '<br>';//I am $string1. I am 20 year old

// String concatenation
echo "Hello " . " World"; // Multiple concatenation . " and PHP";

// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;


// Multiline text and line breaks
$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";
echo $longText . '<br>' . PHP_EOL;//In se thanh mot dong
echo nl2br($longText) . '<br>' . PHP_EOL;//In ra se de nguyen format cua code

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo "1 - " . $longText . '<br>';//In binh thuong
echo "2 - " . nl2br($longText) . '<br>';//In giu nguyen format cua code
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;//khong bien dich html trong php
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;//bien dich html trong php
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;//khong bien dich html trong php