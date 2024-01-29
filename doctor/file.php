<?php


include "../db_conn.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT fname, lname,email, birth, gender, phone, health FROM appointment WHERE id = $id";
  $result = $conn->query($query);



  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css">
    <title>Document</title>

  </head>

  <body>
    <header>

      <nav class="navigation">

        <a href="../login.php">Logout</a>

      </nav>
      </div>
    </header>

    <section class="main">
      <form action="submit_file.php" method="POST">
        <?php

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();

          ?>
          <label for="fname">First Name</label>
          <input type="text" name="fname" disabled value="<?php echo $row['fname']; ?>">
          <label for="lname">Last Name</label>
          <input type="text" name="lname" disabled value="<?php echo $row['lname']; ?>">
          <label for="birth">Date of birth</label>
          <input type="text" name="birth" disabled value="<?php echo $row['birth']; ?>">
          <label for="health">Health Problems</label>
          <input type="text" name="health" disabled value="<?php echo $row['health']; ?>"> <br><br><br>
           
          <input type="hidden" name="email" disabled value="<?php echo $row['email']; ?>"> 
          <input type="hidden" name="ap_id" value="<?php echo $id; ?>">
          <?php
        }
}

?>
      <label for="weight">Weight</label>
      <input type="text" name="weight">
      <label for="height">Height</label>
      <input type="text" name="height">
      <label for="surgery">Surgery</label>
      <input type="radio" name="surgery" class="input1" value="Yes">Yes <input type="radio" name="surgery"
        class="input1" value="No">No
      <label for="type_surgery">Type Of Surgery</label>
      <select name="type_surgery">
        <option value=""></option>
        <option value="Orthopedic Surgery">Orthopedic Surgery</option>
        <option value="Cardiac Surgery">Cardiac Surgery</option>
        <option value="General Surgery">General Surgery</option>
        <option value="Ophthalmic Surgery">Ophthalmic Surgery</option>
        <option value="Gynecological Surgery">Gynecological Surgery</option>
      </select><br><br><br><br>
      <label for="allergies">Allergies</label>
      <input type="radio" name="allergies" class="input1" value="Yes">Yes <input type="radio" name="allergies"
        class="input1" value="No">No
      <label for="type_allergy">Allergy Type</label>
      <select name="type_allergy" id="">
        <option value=""></option>
        <option value="Drug allergy">Drug allergy</option>
        <option value="Anaphylaxis">Anaphylaxis</option>
        <option value="Asthma">Asthma</option>
        <option value="Eczema">Eczema</option>
        <option value="Eye allergy">Eye allergy</option>
      </select>
      <label for="chronic">Chronic Medicines</label>
      <input type="radio" name="chronic" class="input1" value="Yes">Yes <input type="radio" name="chronic"
        class="input1" value="No">No
      <label for="type_chronic">Chronic Medicines</label>
      <select name="type_chronic" id="">
        <option value=""></option>
        <option value="Hypertension Medications">Hypertension Medications</option>
        <option value="Diabetes Medications">Diabetes Medications</option>
        <option value="Cholesterol Medications">Cholesterol Medications</option>
        <option value="Thyroid Medications">Thyroid Medications</option>
        <option value="Gastrointestinal Medications">Gastrointestinal Medications</option>
      </select> <br><br><br><br>
      <label for="vac">Vaccines</label>
      <input type="radio" name="vac" class="input1" value="Yes">Yes <input type="radio" name="vac" class="input1"
        value="No">No
      <label for="type_vac">Type of Vaccines</label>
      <select name="type_vac" id="">
        <option value=""></option>
        <option value="Pneumococcal">Pneumococcal</option>
        <option value="Covid">Covid</option>
        <option value="Measles vaccine">Measles vaccine</option>
        <option value="Paralysis vaccine">Paralysis vaccine</option>
        <option value="Smallpox vaccine">Smallpox vaccine</option>
      </select>
      <label for="med">Adding Medicines</label>
      <input type="text" name="med">


      <button type="submit" name="SUBMIT" class="btn">Submit</button>
  </section>
  </form>
</body>

</html>
<?php


?>