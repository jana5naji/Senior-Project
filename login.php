<?php

session_start();
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $role = $_POST["role"];


  if ($role === "nurse" && $username === "nurse" && $password === "nurse123") {
    header("location:nurse/search.html");
    exit();
  } elseif ($role === "doctor" && $username === "joseph" && $password === "joseph123") {
    header("location:doctor/viewjoseph.php");
    exit();
  } elseif ($role === "doctor" && $username === "karam" && $password === "karam123") {
    header("location:doctor/viewkaram.php");
    exit();
  } elseif ($role === "doctor" && $username === "kayan" && $password === "kayan123") {
    header("location:doctor/viewkayan.php");
    exit();
  } elseif ($role === "doctor" && $username === "ali" && $password === "ali123") {
    header("location:doctor/viewali.php");
    exit();
  } elseif ($role === "doctor" && $username === "perla" && $password === "perla123") {
    header("location:doctor/viewperla.php");
    exit();
  } elseif ($role === "doctor" && $username === "katia" && $password === "katia123") {
    header("location:doctor/viewkatia.php");
    exit();
  } else {
    $em = "Incorrect Username or Password or Role";
    header("Location:login.php?error=$em");
    exit;
  }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="pic/logo1.png" alt="your logo" />
    </div>
  </header>

  <section class="main">
    <form action="login.php" method="POST" name="login" id="loginForm">
      <div class="container">
        <h3>LOGIN NOW</h3><br>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?= $_GET['error'] ?>
          </div>
        <?php } ?>
        <label for="username"> </label><br />
        <input type="text" placeholder="Enter username" name="username" required><br />
        <label for="pass"> </label><br />
        <input type="password" placeholder="Enter your password" name="password" required><br /><br>
        <select class="form-control" name="role" required>
          <option value=""></option>
          <option value="nurse">Nurse</option>
          <option value="doctor">Doctor</option>
        </select><br /><br />
         <button type="submit" class="creatbtn" value="login">
          Login Now
        </button>
      </div>
    </form>
  </section>
</body>

</html>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@100;200;300;400&display=swap");

  * {
    margin: 0;
    padding: 0;
  }

  body {
    background-image: url("pic/cover.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  header {
    text-align: center;
  }

  .logo img {
    margin: 0 auto;
    width: 15%;
    top: auto;
    display: flex;
  }

  .main {
    padding: 100px 200px;
  }

  .container {
    position: absolute;
    text-align: center;
  }

  .container h3 {
    font-size: 15px;
    margin-bottom: 10px;
    position: relative;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
    letter-spacing: 2px;
  }

  .container h3::after {
    content: "";
    width: 30px;
    height: 4px;
    border-radius: 3px;
    background: #0b41ff;
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
  }

  input {
    padding: 5px;
  }

  .form-control {
    padding: 5px 57px;
  }

  .creatbtn {
    background-color: #0b41ff;
    padding: 5px 57px;
    color: white;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
    border-color: #0b41ff;
  }

  p {
    margin: 8px;
    font-size: 11px;
  }
</style>