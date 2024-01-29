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
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
    <style>
        .btn {
            margin-top: -200px;
            padding: 10px 30px;
            border-radius: 25px;
            border: #0b41ff;
            cursor: pointer;
            text-decoration: none;
            background-color: #0b41ff;
            font-weight: bold;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <a class="home" href="viewjoseph.php">Home</a>

        <nav class="navigation">

            <a href="../login.php">Logout</a>

        </nav>
        </div>
    </header>
    <section class="main" id="patient">
        <a href="doctors.php?doctor_name=Dr.%20Joseph%20Milad&specialization=Ophthalmologist" class="btn">View</a><br>
    </section>

</body>

</html>