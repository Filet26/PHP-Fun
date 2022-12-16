<?php include 'includes/header.php'?>


<?php

// $feedback = [
//   [
//     'id' => '1',
//     'name' => 'John',
//     'email' => 'John@gmail.com',
//     'body' => 'I like fortnite so much!!!'
//   ],
//   [
//     'id' => '2',
//     'name' => 'Paul',
//     'email' => 'Paul@gmail.com',
//     'body' => 'Fish burgers are tasty!'
//   ],
//   [
//     'id' => '3',
//     'name' => 'Carlos',
//     'email' => 'Carlos@gmail.com',
//     'body' => 'Interest rates are too high!!'
//   ]

// ];


$sql = 'SELECT * FROM feedback';
$result = mysqli_query($connection, $sql);

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

        <h2>Past Feedback</h2>


        <?php if(empty($feedback)): ?>
          <p class="lead mt3">There is no Feedback</p>
        <?php endif; ?>

        
        <!-- Loop through each item in array, and display its body -->
        <?php foreach($feedback as $item): ?>


        <div class="card my-3 w-75">
          <div class="card-body text-center">
            <?php echo $item['body'] ?>
            <div class="text-secondary mt-2">By: <?php echo $item['name'] ?> | On <?php echo $item['date'] ?></div>
          </div>
        </div>

        <?php endforeach ?>

        <?php include 'includes/footer.php'?>

