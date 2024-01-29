<?php
include "appo.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="appodr.css">
    <title>Appointment</title>

</head>

<body>
    <header>

        <img src="../pic/logo1.png" alt="your logo" class="img">
        <nav class="navigation">
            <a href="home1.html">Home</a>
            <a href="#services">Services</a>
            <a href="doctor.html" target="_blank">Doctors</a>
            <a href="logout.php">Logout</a>

        </nav>
        </div>
    </header>
    <section class="main">

        <div class="content">
            <div class="card">
                <img src="../pic/dr1.png" alt="">

                <h3 class="name" name="doctor_name">Dr. Joseph Milad</h3>
                <p class="specialization" name="">Ophthalmologist</p><br>
                <p><b>Available Date&Time:</b> <br>
                    Monday / Wednesday <br>
                    9:00 AM - 12:00 PM
                </p><br>
                <p class="phone"> <i class="fa-solid fa-phone"></i> +961 8 590 890</p>
            </div>
        </div>
        <form action="appo.php" method="POST" id="form">
            <label for="fname">First Name</label>
            <input type="text" name="fname" required>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" required><br><br>
            <label for="email">Email</label>
            <input type="email" name="email" required><br><br>
            <label for="birth">Date of Birth</label>
            <input type="date" name="birth" required>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" class="input1" value="Female" required>Female <input type="radio"
                name="gender" class="input1" value="Male" required>Male <br><br>
            <label for="address">Address</label>
            <input type="text" name="address" required>
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" required><br>
            <label for="health">Health Problems</label>
            <select name="health" id="" required>
                <option value=""></option>
                <option value="Cadiovascular Disease">Cadiovascular Disease</option>
                <option value="Hypertension">Hypertension</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Cancer">Cancer</option>
                <option value="Obesity">Obesity</option>
                <option value="None">None</option>
            </select>
            <label for="date">Date</label>
            <input type="date" name="date" id="" required><br><br>
            <label for="time">Time</label>
            <select name="time" id="time" required>
                <option value=""></option>
                <option value="9:00">9:00 AM</option>
                <option value="9:30">9:30 AM</option>
                <option value="10:00">10:00 AM</option>
                <option value="10:30">10:30 AM</option>
                <option value="11:00">11:00 AM</option>
                <option value="11:30">11:30 AM</option>
                <option value="12:00">12:00 PM</option>
            </select><br><br>
            <input type="hidden" name="doctor_name" id="" value="<?php echo $_GET['doctor_name'] ?>">
            <input type="hidden" name="specialization" id="" value="<?php echo $_GET['specialization'] ?>">
            <button type="submit" name="SUBMIT" class="btn">Submit</button><br>
        </form>
        <?php
        if (isset($_GET['success']))
        ?>

    </section>

</body>

</html>