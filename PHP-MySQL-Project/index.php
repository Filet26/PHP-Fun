
        
<?php include 'includes/header.php'?>
<!-- require will also work, require will break page if inc not found -->


<?php
$name = $email = $body = '';

$nameErr = $emailErr = $bodyErr = '';

// form submit
if(isset($_POST['submit']))
  // validate name
  if(empty($_POST['name']))
    $nameErr = 'Name is required';
  else
    $name = $_POST['name'];

  // validate email
  if(empty($_POST['email']))
    $emailErr = 'Email is required';
  else
    $email = $_POST['email'];

  // validate body
  if(empty($_POST['body']))
    $bodyErr = 'Body is required';
  else
    $body = $_POST['body'];

  // check if there are no errors
if (!empty($name) && !empty($email) && !empty($body))
  // insert into db
  $sql_query = "INSERT INTO feedback(name, email, body) VALUES('$name', '$email', '$body')";

    if(mysqli_query($connection, $sql_query))
      // redirect to feedback
      header('Location: feedback.php');
    else
      echo 'Error: ' . mysqli_error($connection);
?>
        <img
          src="/php-tutorial/feedback/img/monkeyshocked.jpg"
          class="w-25 mb-3"
          alt=""
        />
        <h2>Feedback</h2>
        <p class="lead text-center">
          Leave feedback for GKJ Capital Management LLC
        </p>
        <form action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="mt-4 w-75" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control <?php echo $nameErr ? 'is-invalid' : null;?>"
              id="name"
              name="name"
              placeholder="Enter your name"
            />
            <div class="invalid-feedback">
              <?php echo $nameErr;?>

          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control <?php echo $emailErr ? 'is-invalid' : null;?>"
              id="email"
              name="email"
              placeholder="Enter your email"
            />
          </div>
          <div class="invalid-feedback">
              <?php echo $emailErr;?>
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Feedback</label>
            <textarea
              class="form-control <?php echo $bodyErr ? 'is-invalid' : null;?>"
              id="body"
              name="body"
              placeholder="Enter your feedback"
            ></textarea>
          </div>

          <div class="invalid-feedback">
              <?php echo $bodyErr;?>
          </div>

          
          <div class="mb-3">
            <input
              type="submit"
              name="submit"
              value="Send"
              class="btn btn-dark w-100"
            />
          </div>
        </form>

        <?php include 'includes/footer.php'?>


