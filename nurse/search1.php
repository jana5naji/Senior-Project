<?php
include "../db_conn.php";
$name = $_GET['name'];
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT id, fname, lname ,email, birth, gender, address, phone FROM appointment WHERE fname LIKE '%$name%'  AND id LIKE '%$id%'");
$result1 = "<table>";
$result1 .= "<tr>";
$result1 .= "<th>ID</th>";
$result1 .= "<th>Patient Name</th>";
$result1 .= "<th>Email</th>";
$result1 .= "<th>Date of birth</th>";
$result1 .= "<th>Gender</th>";
$result1 .= "<th>Address</th>";
$result1 .= "<th>Phone Number</th>";
$result1 .= "</tr>";

while ($row = mysqli_fetch_array($result)) {
  $result1 .= "<tr>";
  $result1 .= "<td>$row[id]</td>";
  $result1 .= "<td>$row[fname] $row[lname]</td>";
  $result1 .= "<td>$row[email]</td>";
  $result1 .= "<td>$row[birth]</td>";
  $result1 .= "<td>$row[gender]</td>";
  $result1 .= "<td>$row[address]</td>";
  $result1 .= "<td>$row[phone]</td>";
  $result1 .= "</tr>";
}
$result1 .= "</table>";
echo $result1;


?>
<style>
  table,
  td,
  th {
    border: 1px solid black;
  }

  table {
    border-collapse: separate;
    width: 170%;
    font-size: 18px;
    text-align: center;
    color: black;
  }

  th {
    background-color: black;
    color: white;
  }
</style>