<?php
// =====================================
//   loops by iman 
// =====================================

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

// Repeats code with counter. From 0 to 10
for ($i = 0; $i <= 10; $i++) {
  echo 'Number ' . $i . '<br>'; // output: Number 0 to 10
}

/* ------------ While Loop ------------ */

// Repeats code while condition is true
$i = 0;
while ($i < 10) {
  echo 'Number ' . $i . '<br>'; // output: Number 0 to 9
  $i++;
}

/* ---------- Do While Loop --------- */

// Runs the code at least once before checking the condition
$i = 0;
do {
  echo 'Number ' . $i . '<br>'; // output: Number 0 to 9
  $i++;
} while ($i < 10);

/* ---------- Foreach Loop ---------- */

// Loop through indexed array
$people = ['joe', 'Jeremy', 'Sara'];
foreach ($people as $person) {
  echo $person . '<br>'; // output: joe, Jeremy, Sara
}

// Loop through associative array
$people = ['joe' => 'joe@gmail.com', 'Jeremy' => 'jeremy@gmail.com', 'Sara' => 'sara@gmail.com'];
foreach ($people as $person => $email) {
  echo $person . ': ' . $email . '<br>'; // output: name: email
}

// Foreach with index
$people = ['joe', 'Jeremy', 'Sara'];
foreach ($people as $index => $person) {
  echo $index . ': ' . $person . '<br>'; // output: 0: joe ...
}

// Foreach on multidimensional array
$posts = [
  ['title' => 'First Post', 'author' => 'joe', 'content' => 'Hello World'],
  ['title' => 'Second Post', 'author' => 'Jeremy', 'content' => 'Hello World'],
  ['title' => 'Third Post', 'author' => 'Sara', 'content' => 'Hello World']
];
foreach ($posts as $post) {
  echo '<h3>' . $post['title'] . '</h3>';
  echo '<p>' . $post['content'] . '</p>';
  echo '<small>By: ' . $post['author'] . '</small><br><br>';
}



// Output will look like:
//
// <h3>First Post</h3>
// <p>Hello World</p>
// <small>By: joe</small>
//
// <h3>Second Post</h3>
// <p>Hello World</p>
// <small>By: Jeremy</small>
//
// <h3>Third Post</h3>
// <p>Hello World</p>
// <small>By: Sara</small>




// Foreach with object
$person = new stdClass();
$person->first_name = 'joe';
$person->last_name = 'Joonguini';
$person->email = 'joe@gmail.com';
foreach ($person as $key => $value) {
  echo $key . ': ' . $value . '<br>'; // key: value 
}

// Output will be:
//
// first_name: joe
// last_name: Joonguini
// email: joe@gmail.com





/* ------- Loop Control Statements ------- */

// break = stop loop
// This stops the loop completely when $i === 5, so it only prints 0 to 4
for ($i = 0; $i <= 10; $i++) {
  if ($i === 5) break;
  echo 'Number ' . $i . '<br>'; // Output: Number 0 to 4
}

// continue = skip this round
// This skips only the current loop when $i === 5, so it prints everything except 5
for ($i = 0; $i <= 10; $i++) {
  if ($i === 5) continue;
  echo 'Number ' . $i . '<br>'; // Output: Number 0 to 10 (except 5)
}

// Nested loops
// Loop inside another loop.
// For each $i (0–5), it loops $j (0–5), creating pairs like 0-0, 0-1, ..., 5-5
for ($i = 0; $i <= 5; $i++) {
  for ($j = 0; $j <= 5; $j++) {
    echo $i . '-' . $j . '<br>'; // Output: All combinations from 0-0 to 5-5
  }
}


/* ------- Loops with Arrays ------- */

// While loop with array
$fruits = ['apple', 'orange', 'pear'];
$i = 0;
while ($i < count($fruits)) {
  echo $fruits[$i] . '<br>'; // output: each fruit
  $i++;
}

// Do-While with array
$i = 0;
do {
  echo $fruits[$i] . '<br>';
  $i++;
} while ($i < count($fruits));

// For loop with array
for ($i = 0; $i < count($fruits); $i++) {
  echo $fruits[$i] . '<br>';
}

// Foreach with index
foreach ($fruits as $index => $fruit) {
  echo $index . ': ' . $fruit . '<br>'; // output: index: fruit
}

// Using range()
$numbers = range(1, 10);
foreach ($numbers as $number) {
  echo $number . '<br>'; // output: 1 to 10
}

// Step of 2
for ($i = 0; $i <= 20; $i += 2) {
  echo $i . '<br>'; // output: even numbers
}

// Odd/Even check
$numbers = [1,2,3,4,5,6,7,8,9,10];
foreach ($numbers as $number) {
  echo $number . ($number % 2 === 0 ? ' is even' : ' is odd') . '<br>';
}

// Multiple Conditions in Loop
$people = [
  ['first_name' => 'joe', 'last_name' => 'Joonguini', 'email' => 'joe@gmail.com', 'age' => 35],
  ['first_name' => 'Jeremy', 'last_name' => 'McPeak', 'email' => 'jeremy@gmail.com', 'age' => 22],
  ['first_name' => 'Sara', 'last_name' => 'Jones', 'email' => 'sara@gmail.com', 'age' => 25]
];
foreach ($people as $person) {
  echo $person['first_name'] . ($person['age'] >= 25 ? ' is an adult' : ' is young') . '<br>';
}

// Break and continue with array
$numbers = range(1, 10);
foreach ($numbers as $number) {
  if ($number === 5) continue; // skip 5
  if ($number === 8) break;    // stop at 8
  echo $number . '<br>';
}

/* -------- Array Functions with Loops -------- */

// array_walk: run function on each item
$fruits = ['apple', 'orange', 'pear', 'banana', 'grape'];
array_walk($fruits, function($fruit) {
  echo 'I like ' . $fruit . '<br>'; // output: I like fruit
});

// array_map: apply and return new array
$upperFruits = array_map('strtoupper', $fruits);
foreach ($upperFruits as $fruit) {
  echo $fruit . '<br>'; // output: capital letters
}

// array_filter: keep only items that match condition
$longFruits = array_filter($fruits, function($fruit) {
  return strlen($fruit) > 4;
});
foreach ($longFruits as $fruit) {
  echo $fruit . ' is a long fruit name<br>';
}
