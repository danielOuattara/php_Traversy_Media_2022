<?php include_once("./includes/header.php"); ?>

<?php
// Fetch feedback from the database
$sql = 'SELECT * FROM feedback;';
$result = mysqli_query($conn, $sql);

if ($result) {
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $feedback = [];
    echo 'Error fetching feedback: ' . mysqli_error($conn);
}
?>

<main>
    <div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>

        <?php if (empty($feedback)) : ?>
            <p class="lead mt-3">No feedback yet!</p>
        <?php else : ?>
            <?php foreach ($feedback as $single_feedback) : ?>
                <div class="card my-3 w-75">
                    <div class="card-body text-center">
                        <h3><?php echo htmlspecialchars($single_feedback['feedback']); ?></h3>
                        <div class="text-secondary mt-2">
                            <p><?php echo 'by ' . htmlspecialchars($single_feedback['name']) . ' on ' . htmlspecialchars($single_feedback['date']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<?php include_once("./includes/footer.php"); ?>