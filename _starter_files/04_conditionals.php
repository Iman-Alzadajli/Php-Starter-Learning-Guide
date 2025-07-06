<?php
// =====================================
//         PHP Conditionals by Iman
// =====================================

/* ------------ Comparison Operators ------------ */
/*
  These are used to compare values:
  <   Less than
  >   Greater than
  <=  Less than or equal to
  >=  Greater than or equal to
  ==  Equal (value)
  === Identical (value & type)
  !=  Not equal
  !== Not identical
*/

/* ------------ If Statements ------------ */

$age = 20;
$salary = 300000;

if ($age >= 20) {
  echo 'You are not a teenager<br>'; // output
}



if ($age >= 20) {
  echo 'You are not a teenager<br>'; // output
} else {
  echo 'You are a teenager<br>';
}



if ($age >= 20) {
  echo 'You are not a teenager<br>'; // output
} elseif ($age >= 13) {
  echo 'You are a teenager<br>';
} else {
  echo 'You are a child<br>';
}

if ($age >= 20) echo 'You are not a teenager<br>'; // output
else echo 'You are a teenager<br>';

/* -------- Ternary Operator -------- */

echo $age >= 20 ? 'You are not a teenager<br>' : 'You are a teenager<br>'; // output

/* -------- Short Ternary (Elvis) -------- */

$myAge = $age ?: 18;
echo $myAge . '<br>'; // output: 20

/* -------- Null Coalescing Operator -------- */

$name = null;
$myName = $name ?? 'iman';
echo $myName . '<br>'; // output: iman

/* -------- Switch Statement -------- */

$userRole = 'admin';

switch ($userRole) {
  case 'admin':
    echo 'You are an admin<br>'; // output
    break;
  case 'editor':
    echo 'You are an editor<br>';
    break;
  case 'user':
    echo 'You are a user<br>';
    break;
  default:
    echo 'You are a guest<br>';
}

/* -------- Comparison Examples -------- */

var_dump(8 == 8);       // true
echo '<br>';
var_dump(8 === '8');     // false (not same type)
echo '<br>';
var_dump(8 != 8);        // false
echo '<br>';
var_dump(8 !== '8');     // true
echo '<br>';
var_dump(8 > 6);         // true
echo '<br>';
var_dump(8 < 6);         // false
echo '<br>';
var_dump(8 >= 8);        // true
echo '<br>';
var_dump(8 <= 6);        // false
echo '<br>';

/* -------- Spaceship Operator <=> -------- */

var_dump(8 <=> 6); // 1
echo '<br>';
var_dump(8 <=> 8); // 0
echo '<br>';
var_dump(8 <=> 10); // -1
echo '<br>';

/* -------- Logical Operators -------- */

var_dump($age >= 20 && $salary >= 300000); // true
echo '<br>';

var_dump($age >= 20 || $salary >= 500000); // true
echo '<br>';

var_dump(!($age >= 20)); // false
echo '<br>';

if ($age >= 20 && $salary >= 300000) {
  echo 'You are rich and not a teenager<br>'; // output
}

if ($age >= 20 || $salary >= 300000) {
  echo 'You are either rich or not a teenager<br>'; // output
}

if (!($age >= 20)) {
  echo 'You are a teenager<br>';
}

/* -------- Precedence -------- */

$result1 = true && false;
$result2 = true || false;

var_dump($result1); // false
echo '<br>';
var_dump($result2); // true
echo '<br>';

$result3 = (true && false) || true;
var_dump($result3); // true
echo '<br>';

/* -------- Complex Condition -------- */

$age = 25;
$salary = 300000;
$creditScore = 700;

if ($age >= 20 && $salary >= 300000 && $creditScore >= 700) {
  echo 'You can get a loan<br>'; // output
} elseif ($age >= 20 && $salary >= 300000) {
  echo 'You can get a loan with higher interest<br>';
} elseif ($age >= 20) {
  echo 'You need to improve your financial situation<br>';
} else {
  echo 'You are too young for a loan<br>';
}

/* -------- Nested If -------- */

$age = 25;
$hasLicense = true;
$hasInsurance = false;

if ($age >= 18) {
  if ($hasLicense) {
    if ($hasInsurance) {
      echo 'You can drive legally<br>';
    } else {
      echo 'You need insurance to drive legally<br>'; // output
    }
  } else {
    echo 'You need a license to drive<br>';
  }
} else {
  echo 'You are too young to drive<br>';
}

/* -------- Switch with Multiple Cases -------- */

$grade = 'B';

switch ($grade) {
  case 'A':
  case 'A+':
    echo 'Excellent!<br>';
    break;
  case 'B':
  case 'B+':
    echo 'Good!<br>'; // output
    break;
  case 'C':
  case 'C+':
    echo 'Average<br>';
    break;
  case 'D':
    echo 'Below average<br>';
    break;
  case 'F':
    echo 'Failed<br>';
    break;
  default:
    echo 'Invalid grade<br>';
}

/* -------- Match Expression (PHP 8+) -------- */


// Match expression (PHP 8+):
// This is a cleaner alternative to switch statements.
// It compares the value of $status and returns a corresponding message.
// If $status is 'active', it returns 'User is active'.
// If it's 'inactive' or 'pending', it returns their messages.
// If none of the cases match, it falls back to the 'default' case.

$status = 'active';

$message = match($status) {
  'active' => 'User is active',
  'inactive' => 'User is inactive',
  'pending' => 'User is pending',
  default => 'Unknown status'
};

echo $message . '<br>'; // output: User is active