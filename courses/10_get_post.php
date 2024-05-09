<?php
/* --- $_GET & $_POST Superglobals 
---------------------------------------

  We can pass data through urls and forms using 
  the $_GET and $_POST superglobals.
*/

echo $_GET['username'] ??= "";
echo $_GET['age'] ??= "";

echo $_POST['username'] ??= "";
echo $_POST['age'] ??= "";


if (isset($_POST['username'])) {
  echo '<h3>' . $_POST['username'] . '</h3>';
}

if (isset($_POST['submit'])) {
  echo '<h3>' . $_POST['username'] . " " .  $_POST['age'] . '</h3>';
}

?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad&age=38">Click</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="username">Name:
      <input type="text" name="username" id="username">
    </label>
  </div>
  <br>
  <div>
    <label for="password">Password:
      <input type="text" name="age" id="password">
    </label>
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>