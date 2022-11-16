<?php include("./includes/header.php") ?>

<?php
$name = $email = $body = null;
$nameError = $emailError = $bodyError = '';

// Form submit

if (isset($_POST['submit'])) {

  // validate name
  if (empty($_POST['name'])) {
    $nameError = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  }

  // validate email
  if (empty($_POST['email'])) {
    $emailError = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  // validate body
  if (empty($_POST['body'])) {
    $bodyError = 'A comment is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
  }

  // if no error !
  if (empty($nameError) && empty($emailError) && empty($bodyError)) {
    // add to db
    $sql = "INSERT INTO feedback(name, email, body) VALUES( '$name', '$email', '$body')";
    if (mysqli_query($conn, $sql)) {
      //success

      header('Location: feedback.php');
    } else {
      // Error
      echo 'Erorr' . mysqli_error($conn);
    }
  }
}

?>
<main>
  <div class="container d-flex flex-column align-items-center">
    <!-- <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="brad traversy media"> -->
    <img src="img/logo.png" class="w-25 mb-3" alt="brad traversy media">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75" method="POST">

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameError ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback"> <?php echo $nameError; ?></div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailError ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback"> <?php echo $emailError; ?></div>
      </div>

      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyError ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback"> <?php echo $bodyError; ?></div>
      </div>

      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
  </div>
</main>

<?php include("./includes/footer.php") ?>