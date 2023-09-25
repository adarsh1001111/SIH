<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Tourist Registration </title>
    <link rel="stylesheet" href="style3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Tourist Registration</div>
    <div class="content">
      <form action="#"method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="first_name" placeholder="Enter your first name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="last_name" placeholder="Enter your last name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email"placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone_number"placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Identity Number</span>
            <input type="text" name="identity_number"placeholder="Enter Identity Number" required>
          </div>
        <div class="input-box">
          <span class="details">Age</span>
          <input type="text" name="age" placeholder="Enter Age" required>
        </div>
        </div>

        <div class="gender-details">
  <span class="gender-title">Gender</span><br><br>
  <input type="radio" name="gender" id="dot-1" value="Male">
   <label for="dot-1">
      <span class="dot one"></span>
      <span class="gender">Male</span>
    </label>
  <input type="radio" name="gender" id="dot-2" value="Female">
   <label for="dot-2">
      <span class="dot two"></span>
      <span class="gender">Female</span>
    </label>
  <input type="radio" name="gender" id="dot-3" value="Prefer not to say">
  <label for="dot-3">
      <span class="dot three"></span>
      <span class="gender">Prefer not to say</span>
    </label>
</div>
<br>
<div class="gender-details">
  <span class="gender-title">Tourist</span><br><br>
  <input type="radio" name="tourist" id="dot-1" value="Male">
   <label for="dot-1">
      <span class="dot one"></span>
      <span class="gender">Indian</span>
    </label>
  <input type="radio" name="tourist" id="dot-2" value="Female">
   <label for="dot-2">
      <span class="dot two"></span>
      <span class="gender">Foreigner</span>
    </label>
</div>
<br>

        <div class="button">
          <input type="submit" name="Register" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<?php
// Include the database connection file (functions.php)
require 'functions.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $identity_number = $_POST['identity_number'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $tourist = $_POST['tourist'];

    // Create a database connection
    $conn = connect();

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to insert data into the table
    $sql = "INSERT INTO tourist_registration (ID,first_name, last_name, email, phone_number, identity_number, age, gender, type) VALUES (1,'$first_name', '$last_name', '$email', '$phone_number', '$identity_number', '$age', '$gender', '$tourist')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
        header("Location: Tourist Dashboard.html");
    exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
