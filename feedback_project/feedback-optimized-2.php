<?php include_once("./includes/header.php"); ?>

<?php
$sql = 'SELECT * FROM feedback;';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Function to fetch feedback
function getFeedback($conn)
{
    $sql = 'SELECT * FROM feedback;';
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fetch feedback
$feedback = getFeedback($conn);
?>

<main>
    <div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>

        <?php if (empty($feedback)) : ?>
            <p class="lead mt3"> No feedback yet !</p>
        <?php else : ?>
            <?php foreach ($feedback as $single_feedback) : ?>
                <div class="card my-3 w-75">
                    <div class="card-body text-center">
                        <h3><?php echo $single_feedback["feedback"]; ?></h3>
                        <div class="text-secondary mt-2">
                            <p><?php echo "by {$single_feedback['name']} on {$single_feedback['date']}"; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<?php include_once("./includes/footer.php"); ?>