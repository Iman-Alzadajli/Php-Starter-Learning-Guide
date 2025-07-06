<?php
// =====================================
//  Exception Handling by Iman
// =====================================

/* ----------- Exceptions in PHP ----------- */

/*
  Exceptions are used to catch and handle errors **without stopping the program**.
  - `try`: Block of code to test for errors.
  - `catch`: Block to handle the error if it occurs.
  - `throw`: Triggers an exception manually.
  - `finally`: Always runs after try/catch, whether there was an error or not.
*/

// Function that throws an exception if $x = 0
function inverse($x) {
  if (!$x) {
    throw new Exception('Division by zero.');
  }
  return 1 / $x;
}

// First Try Block (safe input)
try {
  echo inverse(5) . ' '; //Output: 0.2
} catch (Exception $e) {
  echo 'Caught exception: ', $e->getMessage(), ' ';
} finally {
  echo 'First finally '; //Always runs
}

// Second Try Block (dangerous input: 0)
try {
  echo inverse(0) . ' ';  //This throws an exception
} catch (Exception $e) {
  echo 'Caught exception: ', $e->getMessage(), ' '; //Catches: "Division by zero."
} finally {
  echo 'Second finally '; //Always runs
}

echo 'Hello World';//This will still be printed
