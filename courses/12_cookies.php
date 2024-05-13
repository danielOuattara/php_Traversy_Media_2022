<?php
/* ------------- Cookies -----------

  Cookies are a mechanism for storing data in the remote 
  browser and thus tracking or identifying return users. 
  
  You can set specific data to be stored in the browser, 
  and then retrieve it when the user visits the site again.


  Since cookies are stored on the client, you shouldn't store 
  sensitive data in them. Sessions are a better choice for 
   storing sensitive data. */


// Set a cookie
setcookie('username', 'Brad Traversy', time() + 86400 * 30); // 86400 = 1 day
setcookie('email', 'brad@email.com', time() + 86400 * 30); // 86400 = 1 day
setcookie('contact', 'brad@email.com', time() + 86400 * 30); // 86400 = 1 day

echo time(), '<br />';

echo "<pre>";
echo print_r($_COOKIE);
echo "</pre>";

// print_r($_COOKIE);

// Get a cookie
if (isset($_COOKIE['email'])) {
  echo "\$_COOKIE['email'] = " . $_COOKIE['email'];
}

// Delete a cookie
setcookie('username', '', time() + 1000);
