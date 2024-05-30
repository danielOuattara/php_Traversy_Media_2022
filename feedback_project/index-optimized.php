<?php include_once("./includes/header.php"); ?>

<?php
$name = $email = $feedback = null;
$nameError = $emailError = $bodyError = null;

// Function to sanitize input and validate presence
function validate_input($input, $type = 'string')
{
    if (empty($_POST[$input])) {
        return ucfirst($input) . ' is required';
    } else {
        return filter_input(INPUT_POST, $input, $type === 'email' ? FILTER_SANITIZE_EMAIL : FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

// Form submit
if (isset($_POST['submit'])) {
    $name = validate_input('name');
    $nameError = is_string($name) ? null : $name;

    $email = validate_input('email', 'email');
    $emailError = is_string($email) ? null : $email;

    $feedback = validate_input('feedback');
    $bodyError = is_string($feedback) ? null : $feedback;

    // If no errors
    if (!$nameError && !$emailError && !$bodyError) {
        $sql = "INSERT INTO feedback (name, email, feedback) VALUES (?, ?, ?)";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $feedback);
            if (mysqli_stmt_execute($stmt)) {
                header('Location: feedback.php');
                exit;
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>

<main>
    <div class="container d-flex flex-column align-items-center">
        <img src="img/logo.png" class="w-25 mb-3" alt="brad traversy media">
        <h2>Feedback</h2>
        <p class="lead text-center">Leave feedback for Traversy Media</p>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control <?php echo $nameError ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Enter your name">
                <div class="invalid-feedback"><?php echo $nameError; ?></div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control <?php echo $emailError ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Enter your email">
                <div class="invalid-feedback"><?php echo $emailError; ?></div>
            </div>

            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback</label>
                <textarea class="form-control <?php echo $bodyError ? 'is-invalid' : ''; ?>" id="feedback" name="feedback" placeholder="Enter your feedback"></textarea>
                <div class="invalid-feedback"><?php echo $bodyError; ?></div>
            </div>

            <div class="mb-3">
                <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
            </div>
        </form>
    </div>
</main>

<?php include_once("./includes/footer.php"); ?>