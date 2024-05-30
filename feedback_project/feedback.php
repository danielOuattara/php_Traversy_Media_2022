<?php include_once("./includes/header.php") ?>

<?php
// $feedback = [
//   [
//     'id' => 1,
//     'name' => 'John Doe',
//     'email' => 'j.doe@email.com',
//     'feedback' => 'I like to learn coding with Brad',
//     'date' => 'now'
//   ],
//   [
//     'id' => 2,
//     'name' => 'Jana Doe',
//     'email' => 'jana@email.com',
//     'feedback' => 'I learnt a lot with Brad. Good teacher',
//     'date' => '2 days ago'
//   ],
//   [
//     'id' => 3,
//     'name' => 'Bob Marley',
//     'email' => 'marley@email.com',
//     'feedback' => 'Gandja is good, Coding with Brad too !',
//     'date' => 'yesterday'
//   ],
// ]
?>

<?php
$sql = 'SELECT * FROM feedback;';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<main>
  <div class="container d-flex flex-column align-items-center">

    <h2>Feedback</h2>

    <?php if (empty($feedback)) : ?>
      <p class="lead mt3"> No feedback yet !</p>
    <?php endif; ?>

    <?php foreach ($feedback as $single_feedback) : ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <h3>
            <?php echo $single_feedback["feedback"]; ?>
          </h3>
          <div class="text-secondary mt-2">
            <p><?php echo "by {$single_feedback['name']} on {$single_feedback['date']}"; ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php include_once("./includes/footer.php") ?>