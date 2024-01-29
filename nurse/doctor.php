<?php
include "../db_conn.php";
$doctor = "SELECT DISTINCT doctor_name, specialization FROM appointment";
$result = $conn->query($doctor);

while ($row = $result->fetch_assoc()) {
    $doctor_name = $row['doctor_name'];
    $specialization = $row['specialization'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="doctor.css">
    <title>Doctors</title>
</head>

<body>
    <header>

        <img src="../pic/logo1.png" alt="your logo" class="img">
        <nav class="navigation">
            <a href="search.html">Home</a>
            <a href="patient.html">Patient</a>
            <a href="doctor.php">Doctors</a>
            <a href="../logout.php">Logout</a>
        </nav>
    </header>

    <section class="main">
        <div class="content">
            <div class="card">
                <img src="../pic/dr1.png" alt="">
                <h3 class="name">Dr. Joseph Milad</h3>
                <p class="specialization">Ophthalmologist</p><br>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 8 590 890</p><br>
                <p><b>Available Date&Time:</b> <br>
                    Monday / Wednesday <br>
                    9:00 AM - 12:00 PM
                </p><br>
                <a href="showappo.php?doctor_name=Dr.%20Joseph%20Milad&specialization=Ophthalmologist"
                    class="appointment">Show Appointment</a><br>
            </div>
            <div class="card">
                <img src="../pic/dr2.png" alt="">
                <h3 class="name">Dr. Ali Muhammad </h3>
                <p class="specialization">Public Health</p><br>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 71 512 645</p><br>
                <p><b>Available Date&Time:</b> <br>
                    Tuesday / Thursday <br>
                    8:00 AM - 1:00 PM
                </p><br>
                <a href="showappo.php?doctor_name=Dr.%20Ali%20Muhammad&specialization=Public Health"
                    class="appointment">Show Appointment</a><br>

            </div>
            <div class="card">
                <img src="../pic/dr3.png" alt="">
                <h3 class="name">Dr. Perla Hamza</h3>
                <p class="specialization">Pediatrician</p><br>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 76 221 532</p><br>
                <p><b>Available Date&Time:</b> <br>
                    Monday / Tuesday / Thursday <br>
                    10:00 AM - 2:00 PM
                </p><br>
                <a href="showappo.php?doctor_name=Dr.%20Perla%20Hamza&specialization=Pediatrician" class="appointment"
                    name="perla">Show Appointment</a><br>
            </div>
            <div class="card">
                <img src="../pic/dr4.png" alt="">
                <h3 class="name">Dr. Kayan Khoury</h3>
                <p class="specialization">Dentist</p><br>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 81 075 167</p><br>
                <p><b>Available Date&Time:</b> <br>
                    Tuesday <br>
                    10:00 AM - 1:00 PM
                </p><br>
                <a href="showappo.php?doctor_name=Dr.%20Kayan%20Khoury&specialization=Dentist" class="appointment">Show
                    Appointment</a><br>
            </div>
            <div class="card">
                <img src="../pic/dr5.png" alt="">
                <h3 class="name">Dr. Katia Harb</h3>
                <p class="specialization">Gynecology</p><br>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 3 700 265</p><br>
                <p><b>Available Date&Time:</b> <br>
                    Wednesday / Friday <br>
                    9:00 AM - 1:00 PM
                </p><br>
                <a href="showappo.php?doctor_name=Dr.%20Katia%20Harb&specialization=Gynecology" class="appointment">Show
                    Appointment</a><br>
            </div>
            <div class="card">
                <img src="../pic/dr6.png" alt="">
                <h3 class="name">Dr. Karam Karam</h3>
                <p class="specialization">Cardiologist</p><br>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 78 444 923</p><br>
                <p><b>Available Date&Time:</b> <br>
                    Thursday / Saturday <br>
                    8:00 AM - 12:00 PM
                </p><br>
                <a href="showappo.php?doctor_name=Dr.%20Karam%20Karam&specialization=Cardiologist"
                    class="appointment">Show Appointment</a><br>
            </div>

    </section>
</body>

</html>