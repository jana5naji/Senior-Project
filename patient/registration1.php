<?php
include "../db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];



  $dbs = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username' OR email = '$email'");
  if (mysqli_num_rows($dbs) > 0) {

    $em = "Username or Email has already exist";
    header("Location:registration1.php?error=$em");
    exit;
  } else {
    $sql = "INSERT INTO register (username,email, password) VALUES ('$username','$email','$password')";

    if ($conn->query($sql) == TRUE) {

      header("location:loginpatient.php");
    } else {
      echo "Error: $dbS <br> $conn->error";

    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registration.css">
  <title>Registration</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="../pic/logo1.png" alt="your logo">
    </div>
  </header>

  <section class="main">
    <form id="registrationForm" action="registration1.php" method="POST" name="register"
      onsubmit="return validateForm()">
      <div class="container">
        <h3>REGISTER NOW</h3><br>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?= $_GET['error'] ?>
          </div>
        <?php } ?>
        <label for="username"> </label><br>
        <input type="text" placeholder="Enter username" name="username" required><br>
        <label for="email"> </label><br>
        <input type="email" placeholder="Enter your email" name="email" required><br>
        <label for="password"> </label><br>
        <input type="password" placeholder="Enter your password" name="password" required><br>
        <label for="confpassword"> </label><br>
        <input type="password" placeholder="Confirm your password" name="confpassword" required><br><br>
        <button type="submit" class="creatbtn" name="Submit" value="register">Register Now</button>
        <p>already have an account? <a href="loginpatient.php">Login now!</a></p>
      </div>
    </form>
  </section>
  <script>
    function validateForm() {
      var username = document.forms["register"]["username"].value;
      var email = document.forms["register"]["email"].value;
      var password = document.forms["register"]["password"].value;
      var confpassword = document.forms["register"]["confpassword"].value;

      if (username == "" || email == "" || password == "" || confpassword == "") {
        alert("All fields must be filled out");
        return false;
      }
      if (password != confpassword) {
        alert("Passwords do not match");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>