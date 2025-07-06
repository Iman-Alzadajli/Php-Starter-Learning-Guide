<?php
// =====================================
//  functions by iman 
// =====================================

/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that perform a specific task.
  You can pass values to them (parameters), and they can return values.
  Functions have their own local scope, separate from global variables.
*/

/*
** Basic function (no parameters)
   Just runs the code inside when called
*/
function welcomeUser() {
  echo 'Welcome to the system!<br>'; // Output: Welcome to the system!
}
welcomeUser();

/*
** Function with parameter
   Takes a value when called and uses it
*/
function greetUser($name) {
  echo "Hello, {$name}!<br>"; // Output: Hello, Ali!
}
greetUser('Ali');

/*
** Function that returns a value
   You can store or use the result
*/
function multiply($x, $y) {
  return $x * $y;
}
$product = multiply(4, 3);
echo $product . '<br>'; // Output: 12

/*
** Function with default parameter
   If second value not passed, it uses 5
*/
function divide($a, $b = 5) {
  return $a / $b;
}
echo divide(20) . '<br>';    // Output: 4
echo divide(20, 4) . '<br>'; // Output: 5

/*
** Anonymous function (no name)
   Stored in a variable, often used in callbacks
*/
$greet = function ($first, $last) {
  return "Hi {$first} {$last}";
};
echo $greet('Iman', 'Zadjali') . '<br>'; // Output: Hi Iman Zadjali

/*
** Arrow function (PHP 7.4+)
   Shorter syntax for simple functions
*/
$square = fn($number) => $number * $number;
echo $square(6) . '<br>'; // Output: 36
?>
