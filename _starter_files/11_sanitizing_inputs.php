<?php
// =====================================
//  Input Sanitization by Iman
// =====================================

/* --- Sanitizing Inputs --- */

/*
  When users submit data through a form, it can be unsafe.
  So we need to sanitize it to prevent:
  - XSS (Cross Site Scripting)
  - Invalid or harmful data
  - SQL injection (if you're using raw queries)

  PHP has built-in functions to help:
  - htmlspecialchars(): Converts special HTML characters to safe ones (e.g., < becomes &lt;)
  - filter_var(): Cleans or validates data
  - filter_input(): Reads and sanitizes data directly from $_POST or $_GET
*/

if (isset($_POST['submit'])) {
  // Sanitize the name (keep letters and common symbols)
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Sanitize the email (remove invalid characters)
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
}
?>

<!-- Form to send data -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
  </div>
  <br>

  <div>
    <label>Email: </label>
    <input type="email" name="email">
  </div>
  <br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
// If the form is submitted, show the cleaned data
if (isset($name) && isset($email)) {
  echo "<br><strong>Sanitized Output:</strong><br>";
  echo "Name: $name <br>";     // Example: if input is <b>Iman</b>, output is &lt;b&gt;Iman&lt;/b&gt;
  echo "Email: $email <br>";   // Example: if input is iman@@gmail.com, it becomes iman@gmail.com
}
?>
