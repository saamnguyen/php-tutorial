<?php
//create arrays
$fruits = ['apple', 'banana', 'orange'];

//print
var_dump($fruits);
echo '<br>';

echo '<pre>';
var_dump($fruits);
echo '<pre>';

//get element
echo $fruits[0];

//set
$fruits[0] = 'pear';
echo '<pre>';
var_dump($fruits);
echo '<pre>';

//check if array has element at index
isset($fruits[2]);//true
echo isset($fruits[4]);//false
echo isset($fruits[2]);//true

//append element
$fruits[] = 'apple';
echo '<pre>';
var_dump($fruits);
echo '<pre>';

//length
echo 'Lenght: ' . count($fruits) . '<br>';

//add element at the end of the array
array_push($fruits, 'peach');
echo '<pre>';
var_dump($fruits);
echo '<br>';

//remove element at the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';

//add element at the beginning of the array
array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '<pre>';

//remove element at the beginning of the array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';

//split
$string = "banana,apple,orange";
explode(',', $string);// bien string thanh array
echo '<pre>';
var_dump(explode(',', $string));
echo '<pre>';
echo $string . '<br>';

//combine
echo '<br>';
echo implode('$', $fruits);//ket hop lai in ra pear$orange....

//check if element exits in the array
//in_array(tham so, array)
echo '<pre>';
var_dump(in_array('apple', $fruits)); // bool(true  )
echo '<pre>';

//search element index in the array
//array_search
array_search('apple', $fruits);

echo '<pre>';
var_dump(array_search('apple', $fruits));//index (int), sai -> false
echo '<pre>';

//merge two array
$vegetables = ['Potato', 'cucumber' ];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump(...$fruits, ...$vegetables);
echo '<pre>';

//sort
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Associative arrays
// ============================================

//create associative
$person = [
    'name' => 'Sam',
    'surname' => 'Samm',
    'age' => 20,
    'hobbies'=> ['soccer', 'photo']
];

echo '<pre>';
var_dump($person);
echo '<pre>';

print_r($person);
echo '<pre>';

//get element by key
echo $person['name'] . '<br>';

//set

//$person['age'] = 21;

//null
if(!isset($person['age'])){
        $person['age'] = 18;
}

$person['age'] ??= 18;


echo $person['age'] . '<br>';

//print key
echo '<pre>';
var_dump(array_keys($person));
echo '<pre>';

//print value array_values

//sort
//key: ksort()
//value: asort()