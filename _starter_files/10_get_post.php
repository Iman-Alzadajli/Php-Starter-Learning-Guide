<?php
// =====================================
//  GET and POST Handling by Iman
// =====================================
/* --- $_GET & $_POST Superglobals --- */

/*
  PHP provides $_GET and $_POST to collect data sent by users:
  - $_GET captures data sent via URL query parameters (e.g., ?username=sara)
  - $_POST captures data sent via HTML forms with method="POST"

  Always use isset() to check if data exists before accessing it to avoid errors.

  In this example:
  - A link sends username "sara" via URL using GET.
  - A form submits name and password via POST.
  - When the form is submitted, the 'name' from POST is displayed.
*/

// Check if form is submitted, then output the 'name' field from POST
if (isset($_POST['submit'])) {
  echo '<h3>' . $_POST['name'] . '</h3>';  // Output: the entered name in form
}

?>



<!-- Example link passing data via GET -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=sara">Link</a> <!-- Clicking this adds ?username=sara to URL -->

<br><br>

<!-- Form sending data via POST -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!--wont show in url and will post it save it --> 
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>