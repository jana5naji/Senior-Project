<?php
include "../db_conn.php";
$doctorName = isset($_GET['doctor_name']) ? $_GET['doctor_name'] : '';
$specialization = isset($_GET['specialization']) ? $_GET['specialization'] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <title>Doctor</title>
</head>

<body>
  <header>

    <nav class="navigation">

      <a href="../login.php">Logout</a>

    </nav>
    </div>
  </header>
  <section class="main">
    <table>
      <tr>
        <th>ID</th>
        <th> Patient Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Date / Time</th>
        <th>Phone Number</th>
        <th></th>
      </tr>
      <?php
      $query = "SELECT id,fname, lname,email, gender, birth, date, time, phone FROM appointment WHERE doctor_name='$doctorName' AND specialization='$specialization'";
      $result = $conn->query($query);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["fname"] . ' ' . $row["lname"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "<td>" . $row["gender"] . "</td>";
          echo "<td>" . $row["birth"] . "</td>";
          echo "<td>" . $row["date"] . "</td>";
          echo "<td>" . $row["phone"] . "</td>";
          echo "<td> <a href='file.php?id={$row['id']}' name='file' class='btn'>File</a></td></tr>";
        }
      }
      ?>
    </table>
  </section>
</body>

</html>
<style>
  table {
    text-align: center;
    margin-bottom: 50px;
    background-color: white;
    color: black;
  }

  table,
  td,
  th {
    border: 1px solid black;
  }

  table {
    border-collapse: separate;
    width: 230%;
    font-size: 15px;
    text-align: center;
    color: black;
  }

  th {
    background-color: black;
    color: white;
  }

  .btn {
    margin: 5px;
    padding: 5px 15px;
    border-radius: 25px;
    text-decoration: none;
    background-color: #0b41ff;
    font-weight: bold;
    display: inline-block;
    color: white;
  }
</style>