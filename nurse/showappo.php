<?php
include "../db_conn.php";
$doctorName = $_GET['doctor_name'];
$specialization = $_GET['specialization'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="showappo1.css">
    <title>Document</title>
</head>

<body>
    <header>
        <img src="../pic/logo1.png" alt="your logo" class="img">
        <nav class="navigation">
            <a href="search.html">Home</a>
            <a href="">Patient</a>
            <a href="doctor.php" target="_blank">Doctors</a>
            <a href="../logout.php">Logout</a>
        </nav>
    </header>

    <section class="main">
        <div class="content">
            <div class="card">
                <h3 class="name">
                    <?php echo "$doctorName"; ?>
                </h3>
                <p class="specialization">
                    <?php echo "$specialization"; ?>
                </p><br>
            </div>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Date/Time</th>
                <th>Phone Number</th>
                <th>Action</th>
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
                    echo "<td><form method='post' action=''><input type='hidden' name='id' value='" . $row["id"] . "'><input type='submit' name='delete' value='Delete' class='delete-button'></form></td>";
                    echo "</tr>";
                }
            }

            ?>
        </table>
        <?php
        if (isset($_POST['delete'])) {
            $id_to_delete = $_POST['id'];

            $delete_query = "DELETE FROM appointment WHERE id = $id_to_delete";
            if ($conn->query($delete_query) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }

        $conn->close();

        ?>
    </section>

</body>

</html>