<?php
// =====================================
//  Array Functions by Iman
// =====================================

/* --------- Array Functions -------- */
/*
  Useful built in PHP functions for working with arrays.
  You can add, remove, search, combine, and transform arrays.
  Reference: https://www.php.net/manual/en/ref.array.php
*/

$colors = ['red', 'green', 'blue'];

/*
** Get array length (number of items)
*/
echo count($colors) . '<br>'; // Output: 3

/*
** Check if a value exists in the array
*/
var_dump(in_array('red', $colors)); // Output: bool(true)

/*
** Add items to the end of the array
*/
$colors[] = 'purple'; // adds purple
array_push($colors, 'yellow', 'pink'); // adds yellow, pink at the end

/*
** Add item to the beginning of the array
*/
array_unshift($colors, 'black'); // adds black at the start

/*
** Remove the last item
*/
array_pop($colors); // removes pink

/*
** Remove the first item
*/
array_shift($colors); // removes black

/*
** Remove specific index
*/
unset($colors[2]); // removes item at index 2 (likely 'blue')

/*
** Split array into chunks
*/
$chunks = array_chunk($colors, 2); // array name , size (items in each one )
print_r($chunks);
/*
Output (example):
Array
(
    [0] => Array
        (
            [0] => red
            [1] => green
        )
    [1] => Array
        (
            [0] => yellow
        )
)
*/

/*
** Merge two arrays
*/
$nums1 = [10, 20, 30];
$nums2 = [40, 50];
$merged = array_merge($nums1, $nums2);
print_r($merged);
/*
Output:
Array
(
    [0] => 10
    [1] => 20
    [2] => 30
    [3] => 40
    [4] => 50
)
*/

/*
** Merge with spread operator (PHP 7.4+)
*/
$merged2 = [...$nums1, ...$nums2];
print_r($merged2);
/*
Same output as above
*/

/*
** Combine two arrays: one for keys, one for values
*/
$keys = ['name', 'age', 'city'];
$values = ['SAra', 24, 'Muscat'];
$userInfo = array_combine($keys, $values);
print_r($userInfo);
/*
Output:
Array
(
    [name] => SAra
    [age] => 24
    [city] => Muscat
)
*/

/*
** Get only keys from an array
*/
$onlyKeys = array_keys($userInfo);
print_r($onlyKeys);
/*
Output:
Array
(
    [0] => name
    [1] => age
    [2] => city
)
*/

/*
** Get only values from an array
*/
$onlyValues = array_values($userInfo);
print_r($onlyValues);
/*
Output:
Array
(
    [0] => Iman
    [1] => 24
    [2] => Muscat
)
*/

/*
** Flip keys and values
*/
$flipped = array_flip($userInfo);
print_r($flipped);
/*
Output:
Array
(
    [sAra] => name
    [24] => age
    [Muscat] => city
)
*/

/*
** Create a range of numbers
*/
$range = range(1, 10);
print_r($range);
/*
Output:
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    ...
    [9] => 10
)
*/

/*
** Map each item to a new format
*/
$mapped = array_map(function ($num) {
  return "Number: $num";
}, $range);
print_r($mapped);
/*
Output:
Array
(
    [0] => Number: 1
    [1] => Number: 2
    ...
    [9] => Number: 10
)
*/

/*
** Filter array based on a condition (even numbers only)
*/
$evens = array_filter($range, fn($n) => $n % 2 === 0);
print_r($evens);
/*
Output:
Array
(
    [1] => 2
    [3] => 4
    [5] => 6
    [7] => 8
    [9] => 10
)
*/

/*
** Reduce array to a single value (sum)
*/
$total = array_reduce($range, fn($carry, $n) => $carry + $n);
echo $total . '<br>'; // Output: 55
?>
