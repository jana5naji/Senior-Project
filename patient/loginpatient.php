<?php
session_start();
include "../db_conn.php";
if (isset($_POST['username'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $dbS = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username' && password = '$password'");


  if (mysqli_num_rows($dbS) > 0) {
    header('location:home1.html');
  } else {
    $em = "Incorrect Username or Password";
    header("Location:loginpatient.php?error=$em");
    exit;

  }

  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>login</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="../pic/logo1.png" alt="your logo">
    </div>
  </header>

  <section class="main">
    <form action="loginpatient.php" method="POST" name="login" id="loginForm">
      <div class="container">
        <h3>LOGIN NOW</h3><br>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?= $_GET['error'] ?>
          </div>
        <?php } ?>
        <label for="username"> </label><br>
        <input type="text" placeholder="Enter username" name="username" required><br>
        <label for="pass"> </label><br>
        <input type="password" placeholder="Enter your password" name="password" required><br>
        <br>
        <button type="submit" class="creatbtn" onclick="login()">Login Now</button>
        <p>don't have an account? <a href="registration1.php">Register now!</a></p>
      </div>
    </form>
  </section>

</body>

</html>