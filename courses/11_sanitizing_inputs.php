<?php
/* --- Sanitizing Inputs -- */

echo "\$_SERVER['PHP_SELF'] = ", $_SERVER['PHP_SELF'];

/*
Data submitted through a form is not sanitized 
by default. We have methods to sanitize data manually.
*/

if (isset($_POST['name']) && isset($_POST['email'])) {

  /* 1 - No Sanitize: DANGER !--------------------------------------------*/
  $name = $_POST['name'];
  $email = $_POST['email'];

  /* 2 - htmlspecialchars() - Convert special characters to HTML entities---*/
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);

  /* 3 - filter_var() - Sanitize data   -------------------------------------*/
  $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  /* 4 - filter_input() - Sanitize inputs ----------------------------------- */
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
}


?>

<!-- Pass data through a form -->
<!-- php_self can be used for xss -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
  </div>
  <br>
  <div>
    <label>Email: </label>
    <input type="text" name="email">
  </div>
  <?php if (isset($_POST['name'])) echo $name, '<br />'; ?>
  <?php if (isset($_POST['email'])) echo $email, '<br />'; ?>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>


<?php
/* 
--------------------------------------------------------------------------------------------
FILTER_SANITIZE_STRING             - Convert string to string with only alphanumeric, 
                                     whitespace, and the following characters - _.:
--------------------------------------------------------------------------------------------
FILTER_SANITIZE_EMAIL              - Convert string to a valid email address

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_URL                - Convert string to a valid URL

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_NUMBER_INT         - Convert string to an integer

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_NUMBER_FLOAT       - Convert string to a float

--------------------------------------------------------------------------------------------
FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most 
                                     other characters 
--------------------------------------------------------------------------------------------
*/ ?>