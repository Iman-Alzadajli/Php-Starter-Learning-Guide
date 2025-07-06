<?php
// =====================================
//  String Functions by Iman
// =====================================

/* ---------- String Functions -------- */
/*
  Built-in PHP functions for working with strings
  You can check length, search, modify, format, etc.
  Reference: https://www.php.net/manual/en/ref.strings.php
*/

$string = "Hello World";

/*
** strlen() - Get length of the string
*/
echo strlen($string) . '<br>'; // Output: 11

/*
** strpos() - Find first position of a character
*/
echo strpos($string, 'o') . '<br>'; // Output: 4

/*
** strrpos() - Find last position of a character
*/
echo strrpos($string, 'o') . '<br>'; // Output: 7

/*
** strrev() - Reverse the string
*/
echo strrev($string) . '<br>'; // Output: dlroW olleH

/*
** strtolower() - Convert to lowercase
*/
echo strtolower($string) . '<br>'; // Output: hello world

/*
** strtoupper() - Convert to uppercase
*/
echo strtoupper($string) . '<br>'; // Output: HELLO WORLD

/*
** ucwords() - Uppercase first letter of each word
*/
echo ucwords($string) . '<br>'; // Output: Hello World

/*
** str_replace() - Replace part of string
*/
echo str_replace('World', 'Everyone', $string) . '<br>'; // Output: Hello Everyone

/*
** substr() - Get part of the string
*/
echo substr($string, 0, 5) . '<br>'; // Output: Hello
echo substr($string, 5) . '<br>';   // Output:  World

/*
** str_starts_with() - Check if string starts with specific text (PHP 8+)
*/
if (str_starts_with($string, 'Hello')) {
  echo 'YES<br>'; // Output: YES
}

/*
** str_ends_with() - Check if string ends with specific text (PHP 8+)
*/
if (str_ends_with($string, 'ld')) {
  echo 'YES<br>'; // Output: YES
}

/*
** htmlentities() - Escape HTML tags
*/
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2) . '<br>'; // Output: &lt;h1&gt;Hello World&lt;/h1&gt;

/*
** printf() - Format and print string with variables
*/
printf('%s is a %s<br>', 'Iman', 'developer'); // Output: Iman is a developer
printf('1 + 1 = %d<br>', 1 + 1);               // Output: 1 + 1 = 2
printf('1 + 1 = %f<br>', 1 + 1);               // Output: 1 + 1 = 2.000000
?>
