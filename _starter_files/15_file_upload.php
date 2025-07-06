<?php
// =====================================
//  File Upload by Iman
// =====================================

/* ----------- File upload ---------- */

/*
  This code allows users to upload image files from their device to the server.
  It checks:
  - If the file is selected
  - If the file type (extension) is allowed
  - If the file size is acceptable (max 1MB)
  Then it stores the file in the "uploads/" folder.
*/

$allowed_ext = array('png', 'jpg', 'jpeg', 'gif'); // Allowed file types

if (isset($_POST['submit'])) {
  // Check if a file is selected
  if (!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];         // File name (e.g., cat.jpg)
    $file_size = $_FILES['upload']['size'];         // Size in bytes
    $file_tmp = $_FILES['upload']['tmp_name'];      // Temporary file path
    $target_dir = "uploads/${file_name}";           // Where to store the uploaded file

    // Get the file extension (e.g., jpg, png)
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    // Check if extension is allowed
    if (in_array($file_ext, $allowed_ext)) {
      // Check file size (max 1MB = 1000000 bytes)
      if ($file_size <= 1000000) {
        // Move the file to uploads folder
        move_uploaded_file($file_tmp, $target_dir);
        echo '<p style="color: green;">File uploaded!</p>';
      } else {
        echo '<p style="color: red;">File too large!</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type!</p>';
    }
  } else {
    $message = '<p style="color: red;">Please choose a file</p>';
  }
}
?>


<!-- html--> 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File Upload</title>
</head>
<body>
  <!-- Show error/success message if exists -->
  <?php echo $message ?? null; ?>

  <!-- Upload form -->
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>
