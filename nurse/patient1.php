<?php
include "../db_conn.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="home1.css" />
  <title>Patient</title>
  <style>
    section {
      padding: 10px 100px;
    }

    .btn {
      margin-top: -300px;
      padding: 10px 30px;
      border-radius: 25px;
      border: #0b41ff;
      cursor: pointer;
      text-decoration: none;
      background-color: #0b41ff;
      font-weight: bold;
      color: white;
    }

    table,
    td,
    th {
      border: 1px solid black;
    }

    table {
      border-collapse: separate;
      width: 100%;
      font-size: 15px;
      text-align: center;
      color: black;
    }

    th {
      background-color: black;
      color: white;
    }
  </style>
</head>

<body>
  <header>
    <img src="../pic/logo1.png" alt="your logo" class="img" />
    <nav class="navigation">
      <a href="search.html">Home</a>
      <a href="#patient">Patient</a>
      <a href="doctor.php" target="_blank">Doctors</a>
      <a href="../logout.php">Logout</a>
    </nav>
  </header>

  <section class="main" id="patient">
    <table>
      <tr>
        <th>ID</th>
        <th> Patient Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Date</th>
        <th>Doctor</th>
        <th>Specialization</th>
      </tr>

      <?php
      $sql = mysqli_query($conn, "SELECT id,fname, lname,email, gender, address, phone , date, doctor_name, specialization FROM appointment");
      //echo "<table border='5' width='100%'>";
//echo "<tr><th>Patient Name</td><th>Gender</th><th>Address</th><th>Phone Number</th><th>Date</th><th>Doctor</th><th>Specialization</th></tr>";
      while ($col = mysqli_fetch_array($sql)) {
        print("<tr><td>" . $col["id"] . "</td>");
        print("<td>" . $col["fname"] . ' ' . $col["lname"] . "</td>");
        print("<td>" . $col["email"] . "</td>");
        print("<td>" . $col["gender"] . "</td>");
        print("<td>" . $col["address"] . "</td>");
        print("<td>" . $col["phone"] . "</td>");
        print("<td>" . $col["date"] . "</td>");
        print("<td>" . $col["doctor_name"] . "</td>");
        print("<td>" . $col["specialization"] . "</td></tr>");
      }
      echo "</table>";
      ?>
    </table>
  </section>
</body>

</html>