<?php 
require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Flight Operator Registration</title>
    <link rel="stylesheet" href="style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Flight Operator Registration</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Operator Name</span>
            <input type="text" name="op_name"placeholder="Enter operator name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"name="email" placeholder="Enter support email" required>
          </div>
          <div class="input-box">
            <span class="details">Customer Support Number</span>
            <input type="text" name="phone_number"placeholder="Enter customer support number" required>
          </div>
          <div class="input-box">
            <span class="details">GST Number</span>
            <input type="text" name="gst"placeholder="Enter GST No." required>
          </div>
        <div class="input-box">
          <span class="details">HeadQuater Address</span>
          <input type="text" name="address" placeholder="Enter Address of Headquators" required>
        </div>
	<div class="input-box">
          <span class="details">Zipcode</span>
          <input type="text" name="pincode" placeholder="Enter Zipcode" required>
        </div>
	<div class="input-box">
          <span class="details">City</span>
          <input type="text" name="city" placeholder="Enter City" required>
        </div>
	<div class="input-box">
          <span class="details">State</span>
          <input type="text"name="state"  placeholder="Enter State" required>
        </div>
	<div class="input-box">
          <span class="details">Country</span>
          <input type="text" name="country" placeholder="Enter Country" required>
        </div>
	<div class="input-box">
            <span class="details">Location</span>
            <input type="text" name="location" placeholder="Enter Google Maps Link" required>
          </div>
      </div>
        <div class="button">
          <input type="submit" name="Register"value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<?php
$conn = connect();

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Get form data
    $opName = $_POST['op_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $gstNumber = $_POST['gst'];
    $address = $_POST['Address'];
    $pincode = $_POST['zipcode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $location= $_POST['location'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO flight_registration (ID,operator_name, phone_number, email, gst_number, Address, pincode, city, state,country, location) VALUES (1,'$opName',$phone_number,'$email', '$gstNumber', '$address', '$pincode', '$city', '$state', '$country','$location')";
    

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    
}
?>