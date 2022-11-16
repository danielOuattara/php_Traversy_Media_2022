<?php include("./includes/header.php") ?>

<?php
// $feedback = [
//   [
//     'id' => 1,
//     'name' => 'John Doe',
//     'email' => 'j.doe@email.com',
//     'body' => 'I like to learn coding with Brad'
//   ],
//   [
//     'id' => 2,
//     'name' => 'Jana Doe',
//     'email' => 'jana@email.com',
//     'body' => 'I learnt a lot with Brad. Good teacher'
//   ],
//   [
//     'id' => 3,
//     'name' => 'Bob Marley',
//     'email' => 'marley@email.com',
//     'body' => 'Gandja is good, Coding with Brad too !'
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

    <?php foreach ($feedback as $subArray) : ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $subArray["body"]; ?>
          <div class="text-secondary mt-2">
            <?php echo "by {$subArray['name']} on {$subArray['date']}"; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php include("./includes/footer.php") ?>