<?php
// =====================================
//  File Handling by Iman
// =====================================

/* ---------- File Handling --------- */

/*
  PHP lets you work with files: create, read, write, and update them.
  Useful for saving data, logs, or exporting info.
*/

$file = 'extras/users.txt'; // file path inside "extras" folder

// Check if the file exists
if (file_exists($file)) {
  // Open the file for reading ('r' mode)
  $handle = fopen($file, 'r');              
  $contents = fread($handle, filesize($file)); // read file content
  fclose($handle);                            // close the file
  echo $contents . '<br>';                    // Output: contents of users.txt
} else {
  // If file doesn't exist, create it and write data
  $handle = fopen($file, 'w');                // create file
  $contents = 'Sara' . PHP_EOL . 'Iman' . PHP_EOL . 'Ali' . PHP_EOL;
  fwrite($handle, $contents);                 // write content to file
  fclose($handle);                            // close after writing
  echo 'File created and content written.<br>';
}

/*
File Modes:
'r'   = read only (file must exist)
'w'   = write only (overwrite or create new)
'a'   = write only (append or create new)
'x'   = create new only (fail if exists)
'r+'  = read/write (file must exist)
'w+'  = read/write (overwrite or create)
'a+'  = read/write (append or create)
'x+'  = create new read/write (fail if exists)
*/
?>
