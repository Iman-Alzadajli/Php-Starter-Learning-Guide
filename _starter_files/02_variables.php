<?php
// =====================================
//           PHP Variables by Iman
// =====================================

/*
  Here I'm learning about how variables work in PHP
  Variables are just boxes that hold values (like a name, number, or list).
  I always start a variable with the $ symbol.
*/

/* ----------- Data Types ----------- */

$name = 'iman';
$name2 = "iman";

$age = 35;
$negative = -3;

$gpa = 3.7;
$price = 987.23;

$employed = true;
$online = false;

$quantity = null;

$langs = array('JavaScript', 'Ruby', 'Python', 'C#', 'PHP');
$langs2 = ['JavaScript', 'Ruby', 'Python', 'C#'];

$person = new stdClass();
$person->first = 'iman';
$person->email = 'iman@gmail.com';
$person->age = 35;

$file = fopen('sample.txt', 'r');

/* --------- Variable Naming --------- */

$firstName = 'iman';
$lastName = 'Adam';
$isOn = true;

define('SITE_NAME', 'Iman\'s PHP Site');
define('PI', 3.14159);
const STATUS = 'active';

echo SITE_NAME . '<br>';      // output: Iman's PHP Site
echo PI . '<br>';             // output: 3.14159
echo STATUS . '<br>';         // output: active

/* ------- String Concatenation ------- */

$fullName = $firstName . ' ' . $lastName;
echo $fullName . '<br>';      // output: iman Adam

$fullName2 = "$firstName $lastName";
echo $fullName2 . '<br>';     // output: iman Adam

$fullName3 = "{$firstName} {$lastName}";
echo $fullName3 . '<br>';     // output: iman Adam

$fullName4 = $firstName;
$fullName4 .= ' ';
$fullName4 .= $lastName;
echo $fullName4 . '<br>';     // output: iman Adam

/* ------- Escaping Characters ------- */

$sentence1 = "She said \"Hello\" to me.";
echo $sentence1 . '<br>';     // output: She said "Hello" to me.

$sentence2 = 'She said "Hello" to me.';
echo $sentence2 . '<br>';     // output: She said "Hello" to me.

$sentence3 = "She said 'Hello' to me.";
echo $sentence3 . '<br>';     // output: She said 'Hello' to me.

$sentence4 = 'She said \'Hello\' to me.';
echo $sentence4 . '<br>';     // output: She said 'Hello' to me.

/* ------- Variable Functions ------- */

var_dump(isset($firstName));     // output: bool(true)
echo '<br>';                   

var_dump(empty($firstName));     // output: bool(false)
echo '<br>';                   

echo gettype($firstName);        // output: string
echo '<br>';                     

var_dump(is_string($firstName)); // output: bool(true)
echo '<br>';                     

var_dump(is_int($age));          // output: bool(true)
echo '<br>';                   
var_dump(is_bool($employed));    // output: bool(true)
echo '<br>';                  

var_dump(is_array($langs));      // output: bool(true)
echo '<br>';                    

var_dump(is_object($person));    // output: bool(true)
echo '<br>';                    

var_dump(is_null($quantity));    // output: bool(true)
echo '<br>';                  

/* -------- Variable Scope -------- */

$globalVar = 'I am global';

function testFunction() {
  $localVar = 'I am local';
  echo $localVar . '<br>';       // output: I am local

  global $globalVar;
  echo $globalVar . '<br>';      // output: I am global
}
testFunction();

function testFunction2() {
  echo $GLOBALS['globalVar'] . '<br>';  // output: I am global
}
testFunction2();
?>
