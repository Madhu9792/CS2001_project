<?php
include_once 'header.php';
?>
<div class="form">
  <h1>Online Sale and Marketing System</h1>
  <form action="includes/login.inc.php" method="post">
    <input type="text" id="fname" name="uid" placeholder="Email/Username" required>
    <input type="password" id="lname" name="pwd" placeholder="Password" required>
    <button name="submit" type="submit">Login</button>
  </form>

  <?php
  if (isset($_GET["error"])) {
      $errorMessage = '';
      switch ($_GET["error"]) {
          case "emptyinput":
              $errorMessage = 'Fill in all fields.';
              break;
          case "wronglogin":
              $errorMessage = 'Invalid login details.';
              break;
          case "stmtfailed":
              $errorMessage = 'Something went wrong. Please try again.';
              break;
          case "none":
              $errorMessage = 'Account created successfully.';
              break;
          default:
              $errorMessage = 'An unknown error occurred.';
              break;
      }
      if (!empty($errorMessage)) {
          echo '<div class="error">' . htmlspecialchars($errorMessage) . '</div>';
      }
  }
  ?>

  <p>New here? <a href="signup.php">Register...</a></p>
</div>

<?php
include_once 'footer.php';
?>
