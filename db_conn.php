<?php

$conn = mysqli_connect("localhost", "root", "");
if (!$conn)
    die("Could not connect to the server - " . mysqli_connect_error());
mysqli_select_db($conn, 'medicalcenter')
    or die("<br>Could not connect to the DB - " . mysqli_error($conn));


?>