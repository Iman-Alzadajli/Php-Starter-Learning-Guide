<?php
/*
  This file is a simple PHP tutorial use it  to learn how to show output 

  Here I'm practicing:
  *echo
  * print
  * print_r
  * var_dump
  * escaping characters
  * mixing HTML with PHP
*/

/* ------- OUTPUT EXAMPLES ------- */

// echo: I can use it to print strings, numbers, or even HTML elements
echo 'iman'; 
echo 1234;
echo '<h1>Iman</h1>'; 

// print: similar to echo but a little slower 
print 'Iman';

// print_r: better for arrays also works with strings but not as detailed
print_r('Iman'); 
print_r([1, 2, 3]); // shows the array nicely

// var_dump: shows more info, like data type and length

var_dump('Hello'); // string(5) "Hello"
var_dump([1, 2, 3]); // array info with types

// Escaping characters: like if I want to show a single quote inside a string
echo "Is your name O\'reilly?";

/* ----------- COMMENTS ----------- */

// single-line comment

/*
  multi-line comment
  I can use this when I want to write more than one line as a comment 
*/

// If this file has HTML after the PHP then I should close the PHP tag like below
?>


<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Lesons by iman </title>
</head>
<body>

  <!-- You can output PHP including variables, etc -->
  <h1>Welcome <?php echo 'Iman'; ?>
  <!-- You may only drop the semi colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Hello <?= 'Iman' ?></h1>


</body>
</html>
