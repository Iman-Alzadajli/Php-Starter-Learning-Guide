<?php
// =====================================
//  Superglobals by Iman
// =====================================

/* ---------- Superglobals ---------- */
/*
  Built-in PHP variables always available (no need to declare).
  Used for handling form data, server info, sessions, cookies, etc.
*/

/*
** $_SERVER - Info about the server and request
*/
echo $_SERVER['HTTP_HOST'] . '<br>';       // Output example: localhost
echo $_SERVER['PHP_SELF'] . '<br>';        // Output example: /path/to/file.php
echo $_SERVER['SERVER_SOFTWARE'] . '<br>'; // Output example: Apache/2.4.41 (Unix)
echo $_SERVER['REMOTE_ADDR'] . '<br>';     // Output example: 127.0.0.1

/*
** $_GET - Get data from URL
Example URL: script.php?name=iman
*/
if (isset($_GET['name'])) {
  echo 'Hello ' . $_GET['name'] . '<br>';  // Output: Hello iman
}

/*
** $_POST - Get data from a submitted form (method="post")
*/
if (isset($_POST['email'])) {
  echo 'Email: ' . $_POST['email'] . '<br>'; // Output: Email: example@mail.com
}

/*
** $_REQUEST - Combines $_GET + $_POST + $_COOKIE
*/
if (isset($_REQUEST['name'])) {
  echo 'Request: ' . $_REQUEST['name'] . '<br>'; // Output: Request: iman
}

/*
** $_COOKIE - Small data stored in the browser 
*/
setcookie('user', 'Iman', time() + 3600); //time 
if (isset($_COOKIE['user'])) {
  echo 'Cookie: ' . $_COOKIE['user'] . '<br>'; // Output: Cookie: Iman
}

/*
** $_SESSION - Server-side session storage
*/
session_start(); // server 
$_SESSION['id'] = 123;
echo 'Session ID: ' . $_SESSION['id'] . '<br>'; // Output: Session ID: 123

/*
** $_FILES - File upload info
Example: $_FILES['myfile']['name'], ['tmp_name'], ['size'], etc.
*/

/*
** $_ENV - Environment variables (from system/server)
*/

// echo $_ENV['PATH']; // Output: system PATH variable string

/*
** $GLOBALS - Access global variables from anywhere
*/
$score = 100;
function showScore() {
  echo $GLOBALS['score'] . '<br>'; // Output: 100
}
showScore();
?>
