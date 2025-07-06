<?php
// =====================================
//         PHP Arrays by Iman
// =====================================

/*
  In this file I'm practicing how arrays work in PHP.
  Arrays help me store multiple values in one variable.
  There are 3 main types:
  - Indexed arrays (use numbers)
  - Associative arrays (use custom keys)
  - Multidimensional arrays (arrays inside arrays)
*/

/* ---------- Indexed Arrays ---------- */

$people = ['iman', 'Sara', 'Ahmed']; 
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy'; // add  new at index 3
$cars[] = 'BMW';    // add to the end

/* ---------- Associative Arrays ---------- */

$ages = ['Nasra' => 30, 'Sara' => 25];
$agesss = [22 => 'iman', 44 => 'Sara'];

/* ---------- Multidimensional Arrays ---------- */

$cars = [
  ['Honda', 20, 10],
  ['Toyota', 30, 20], //this one 
  ['Ford', 23, 12],
];

echo $cars[1][2]; // prints 20
echo '<br>'; // (new line in HTML output)

/* ---------- Person Data Example ---------- */

$person = [
  'first_name' => 'iman',
  'last_name' => 'Alzadajli',
  'email' => 'iman@gmail.com',
];

echo $person['first_name']; // prints "iman"
echo '<br>';

/* ---------- Short Syntax ---------- */

$person2 = [
  'first_name' => 'iman',
  'last_name' => 'Alzadajli',
  'email' => 'iman@gmail.com',
];

echo $person2['first_name']; // prints "iman"
echo '<br>';

/* ---------- Array of People ---------- */

$people = [
  [
    'first_name' => 'iman',
    'last_name' => 'Alzadajli',
    'email' => 'iman@gmail.com',
  ],
  [
    'first_name' => 'Sara',
    'last_name' => 'Ali',
    'email' => 'sara@gmail.com',
  ],
];

echo $people[1]['email']; // prints "sara@gmail.com"
echo '<br>';

/* ---------- JSON Conversion ---------- */

// JSON string to object
$jsonobj = '{"first_name":"iman",
"last_name":"Alzadajli",
"email":"iman@gmail.com"}';

$obj = json_decode($jsonobj);
echo $obj->first_name; // prints "iman"
echo '<br>'; 

// Array to JSON
$arr = ['first_name' => 'iman', 'last_name' => 'Alzadajli', 'email' => 'iman@gmail.com'];
$json = json_encode($arr);
echo $json; // prints '{"first_name":"iman","last_name":"Alzadajli","email":"iman@gmail.com"}'
echo '<br>';

/* ---------- Array Functions ---------- */

$fruits = ['apple', 'orange', 'pear'];

// Count items
echo count($fruits); // prints 3
echo '<br>';

// Check if item exists
var_dump(in_array('apple', $fruits)); // prints bool(true)
echo '<br>';

// Add items
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');

// Remove items
array_pop($fruits);    // removes last item "strawberry"
array_shift($fruits);  // removes first item "mango"
unset($fruits[2]);     // removes 3rd item

// Split into chunks
$chunked = array_chunk($fruits, 2);
print_r($chunked); // prints array chunks like [[orange, pear], [grape, blueberry]]
echo '<br>';

/* ---------- Merge & Spread ---------- */

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3); // prints [1, 2, 3, 4, 5, 6]
echo '<br>';

$arr4 = [...$arr1, ...$arr2];
print_r($arr4); // prints [1, 2, 3, 4, 5, 6]
echo '<br>';

/* ---------- Combine and  Keys/Values ---------- */

$colors = ['green', 'red', 'yellow'];
$fruits = ['avocado', 'apple', 'banana'];
$combined = array_combine($colors, $fruits);
print_r($combined); 
// prints ['green'=>'avocado', 'red'=>'apple', 'yellow'=>'banana']
echo '<br>';

$keys = array_keys($combined);
print_r($keys); // prints ['green', 'red', 'yellow']
echo '<br>';

$values = array_values($combined);
print_r($values); // prints ['avocado', 'apple', 'banana']
echo '<br>';

$flipped = array_flip($combined);
print_r($flipped); 
// prints ['avocado'=>'green', 'apple'=>'red', 'banana'=>'yellow']
echo '<br>';

/* ---------- Range, Map, Filter, Reduce ---------- */

$numbers = range(1, 20);
print_r($numbers); // prints [1, 2, 3, ..., 20]
echo '<br>';


// Map
$newNumbers = array_map(fn($n) => "Number $n", $numbers);
print_r($newNumbers); // prints ["Number 1", "Number 2", ..., "Number 20"]
echo '<br>';

// Filter
$lessThan10 = array_filter($numbers, fn($n) => $n <= 10);
print_r($lessThan10); // prints [1, 2, ..., 10]
echo '<br>';

// Reduce (Sum)
$sum = array_reduce($numbers, fn($carry, $n) => $carry + $n);
echo $sum; // prints 210 (sum of 1 to 20)
echo '<br>';
?>
