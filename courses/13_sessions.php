<?php
/* ------------ Sessions ------------

  Sessions are a way to store information in variables 
  to be used across multiple pages.
  
  Unlike cookies, sessions are stored on the server. */


session_start(); // Must be called before accessing any session data

if (isset($_POST['submit'])) {

  $username = filter_input(
    INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );

  $password = $_POST["password"];

  if ($username == 'john' && $password == 'secret') {
    // first set Session variable
    $_SESSION['username'] = $username;
    // then redirect user to another page
    header('Location: ./extra/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <h1>Login</h1>
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
  </div>
  <br>
  <div>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password">
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>