<?php
// =====================================
//  Sessions by Iman
// =====================================

/* ------------ Sessions ------------ */
/*
  Sessions are used to store user info on the server.
  Unlike cookies, session data is not stored in the browser — it's safer.

  Sessions help when you want to:
  - Keep users logged in
  - Track their data across pages (like username, cart, etc.)
*/

session_start(); // Always start session before working with $_SESSION

// Check if form is submitted
if (isset($_POST['submit'])) {
  // Sanitize username input
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = $_POST['password'];

  // Simple check — in real apps, check with a database
  if ($username === 'sara' && $password === 'pass123') {
    // Save username in session
    $_SESSION['username'] = $username;

    // Redirect to another page (example: dashboard)
    header('Location: /extras/dashboard.php');
    exit(); // Always exit after header redirect
  } else {
    echo ' Incorrect username or password<br>';
  }
}
?>

<!-- Form to simulate login -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label>Username: </label>
    <input type="text" name="username">
  </div>
  <br>
  <div>
    <label>Password: </label>
    <input type="password" name="password">
  </div>
  <br>
  <input type="submit" name="submit" value="Login">
</form>
