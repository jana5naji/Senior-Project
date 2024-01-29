<?php
include "../db_conn.php";

if (isset($_POST['SUBMIT'])) {
  if (isset($_POST['ap_id'])) {
    $ap_id = $_POST['ap_id'];

    // Fetch the 'id' from the appointment table using $ap_id
    $fetchAp_id = "SELECT id FROM appointment WHERE id = '$ap_id'";
    $fetchResult = $conn->query($fetchAp_id);

    if ($fetchResult) {
      // Check if rows were fetched
      if ($fetchResult->num_rows > 0) {
        $data = $fetchResult->fetch_assoc();
        $id = $data['id'];

        $fetchData = "SELECT fname, lname,email, birth, health FROM appointment WHERE id = '$ap_id'";
        $fetchAppResult = $conn->query($fetchData);

        if ($fetchAppResult) {
          // Check if rows were fetched
          if ($fetchAppResult->num_rows > 0) {
            $appointmentData = $fetchAppResult->fetch_assoc();

            $fname = $appointmentData['fname'] ?? '';
            $lname = $appointmentData['lname'] ?? '';
            $birth = $appointmentData['birth'] ?? '';
            $health = $appointmentData['health'] ?? '';
            $email = $appointmentData['email'] ?? '';
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $surgery = $_POST['surgery'];
            $type_surgery = $_POST['type_surgery'];
            $allergies = $_POST['allergies'];
            $type_allergy = $_POST['type_allergy'];
            $chronic = $_POST['chronic'];
            $type_chronic = $_POST['type_chronic'];
            $vac = $_POST['vac'];
            $type_vac = $_POST['type_vac'];
            $med = $_POST['med'];

            $sql = "INSERT INTO patientfile (ap_id,fname,lname,email,birth,health,weight,height,surgery,type_surgery,allergies,type_allergy,chronic,type_chronic,vac,type_vac,med) VALUES ('$ap_id','$fname','$lname','$email','$birth','$health','$weight','$height','$surgery','$type_surgery','$allergies','$type_allergy','$chronic','$type_chronic','$vac','$type_vac','$med')";
            $result = $conn->query($sql);


            if ($result === TRUE) {
              $headers = "From: medicalife@gmail.com";
              $to = $email;
              $subject = "Medical Information Update";
              $message = "Dear $fname $lname,\n\nYour medical information has been updated:\nWeight: $weight\nHeight: $height\nAdditional Medicines: $med\n\nKind Regrads,\nThe Healthcare Team";
              mail($to, $subject, $message, $headers);

              header("Location: {$_SERVER['HTTP_REFERER']}");
              exit;

            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
          }
        }
      }
    }
  }
}
$conn->close();

?>