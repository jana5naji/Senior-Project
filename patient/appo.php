<?php
// session_start();

include "../db_conn.php";
extract($_POST);

if (isset($SUBMIT)) {


  $doctor_name = $_POST['doctor_name'];
  $specialization = $_POST['specialization'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $birth = $_POST['birth'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $health = $_POST['health'];
  $date = $_POST['date'];
  $time = $_POST['time'];



  $sql = "INSERT INTO appointment(fname,lname,email,birth,gender,address,phone,health,date,time,doctor_name,specialization) VALUES ('$fname','$lname','$email', '$birth','$gender','$address','$phone','$health','$date','$time','$doctor_name','$specialization')";

  if ($conn->query($sql) === TRUE) {
    ?>
    <script>
      alert('appointment booked successfully ');
      window.location.href = 'doctor.php';

    </script>
    <?php

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


}

?>