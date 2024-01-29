<?php
include "appo.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="doctor.css">
    <title>Patient/Doctors</title>
</head>

<body>
    <header>

        <img src="../pic/logo1.png" alt="your logo" class="img">
        <nav class="navigation">
            <a href="home1.html">Home</a>
            <a href="home1.html #services" target="_blank">Services</a>
            <a href="#doctor">Doctors</a>
            <a href="logout.php">Logout</a>
        </nav>
        </div>
    </header>
    <section class="main" id="doctor">
        <div class="content">
            <div class="card">
                <img src="../pic/dr1.png" alt="">
                <h3 class="name" name="doctor_name" id="1">Dr. Joseph Milad</h3>
                <p class="specialization" name="specialization">Ophthalmologist</p>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 8 590 890</p>
                <a href="appodr1.php?doctor_name=Dr.%20Joseph%20Milad&specialization=Ophthalmologist"
                    class="appointment">Appointment</a><br>
                <a href="" class="liveChat">Live Chat</a>
            </div>
            <div class="card">
                <img src="../pic/dr2.png" alt="">
                <h3 class="name" name="doctor_name">Dr. Ali Muhammad </h3>
                <p class="specialization" name="specialization">Public Health</p>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 71 512 645</p>
                <a href="appodr2.php?doctor_name=Dr.%20Ali%20Muhammad&specialization=Public Health"
                    class="appointment">Appointment</a><br>
                <a href="" class="liveChat">Live Chat</a>
            </div>
            <div class="card">
                <img src="../pic/dr3.png" alt="">
                <h3 class="name">Dr. Perla Hamza</h3>
                <p class="specialization">Pediatrician</p>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 76 221 5332</p>
                <a href="appodr3.php?doctor_name=Dr.%20Perla%20Hamza&specialization=Pediatrician"
                    class="appointment">Appointment</a><br>
                <a href="" class="liveChat">Live Chat</a>
            </div>
            <div class="card">
                <img src="../pic/dr4.png" alt="">
                <h3 class="name">Dr. Kayan Khoury</h3>
                <p class="specialization">Dentist</p>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 81 075 167</p>
                <a href="appodr4.php?doctor_name=Dr.%20Kayan%20Khoury&specialization=Dentist"
                    class="appointment">Appointment</a><br>
                <a href="" class="liveChat">Live Chat</a>
            </div>
            <div class="card">
                <img src="../pic/dr5.png" alt="">
                <h3 class="name">Dr. Katia Harb</h3>
                <p class="specialization">Gynecology</p>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 3 700 265</p>
                <a href="appodr5.php?doctor_name=Dr.%20Katia%20Harb&specialization=Gynecology"
                    class="appointment">Appointment</a><br>
                <a href="" class="liveChat">Live Chat</a>
            </div>
            <div class="card">
                <img src="../pic/dr6.png" alt="">
                <h3 class="name">Dr. Karam Karam</h3>
                <p class="specialization">Cardiologist</p>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 78 444 923</p>
                <a href="appodr6.php?doctor_name=Dr.%20Karam%20Karam&specialization=Cardiologist"
                    class="appointment">Appointment</a><br>
                <a href="" class="liveChat">Live Chat</a>
            </div>
    </section>
    <footer class="footer">
        <div class="icon1">
            <i class="fa-solid fa-location-dot"></i> Beqaa, Rashaya <br><br>
            <i class="fa-solid fa-envelope"></i><a href="mailto:medicalife@hotmail.com" class="email">
                medicalife@hotmail.com</a><br><br>
            <i class="fa-solid fa-phone"></i> +961 8 590 890
        </div>
        <div class="text">
            <p>"Your Path to Health and <br>Wellness - MEDICALIFE."
            </p>
        </div>


    </footer>
</body>

</html>