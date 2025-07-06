<?php
// =====================================
//  Cookies by Iman
// =====================================

/* ------------- Cookies ------------ */
/*
  Cookies are small pieces of data stored in the user's browser.
  You can use them to remember information between visits (like names, themes, etc).

  ⚠️ Don’t store sensitive data in cookies — use sessions instead.
*/

// ----------------------
// 1. Set a cookie
// ----------------------
// This will store a cookie called 'user' with value 'Iman' for 30 days
setcookie('user', 'Iman', time() + 86400 * 30); // 86400 = 1 day

/*
  Output (in the browser next time user visits):
  Cookie stored in browser with key 'user' and value 'Iman'
*/

// ----------------------
// 2. Get a cookie
// ----------------------
// This checks if the cookie exists and displays its value
if (isset($_COOKIE['user'])) {
  echo 'Welcome back, ' . $_COOKIE['user'] . '!<br>'; 
  // Output: Welcome back, Iman!
}

// ----------------------
// 3. Delete a cookie
// ----------------------
// This sets the cookie expiration time in the past to remove it
setcookie('user', '', time() - 86400);

/*
  Output: Cookie will be removed from browser storage.
*/
?>
