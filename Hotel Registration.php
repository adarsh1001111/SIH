<?php 
require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Hotel Registration</title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Hotel Registration</div>
    <div class="content">
        <form  method="post"> <!-- Specify the PHP file where the form data will be sent -->
            <div class="user-details">
                <!-- Add name attributes to the input fields to capture the data in PHP -->
                <div class="input-box">
                    <span class="details">Hotel Name</span>
                    <input type="text" name="hotelName" placeholder="Enter hotel name" required>
                </div>
            <!-- </div> -->
            <div class="input-box">
            <span class="details">Onwer Name</span>
            <input type="text" name="ownerName" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email"  name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phoneNumber" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">GST Number</span>
            <input type="text" name="gstNumber" placeholder="Enter GST No." required>
          </div>
        <div class="input-box">
          <span class="details">Address</span>
          <input type="text" name="address" placeholder="Enter Address" required>
        </div>
	<div class="input-box">
          <span class="details">Pincode</span>
          <input type="text" name="pincode" placeholder="Enter Pincode" required>
        </div>
	<div class="input-box">
          <span class="details">City</span>
          <input type="text" name="city" placeholder="Enter City" required>
        </div>
	<div class="input-box">
          <span class="details">State</span>
          <input type="text" name="state" placeholder="Enter State" required>
        </div>
	<div class="input-box">
            <span class="details">Location</span>
            <input type="text" name="location" placeholder="Enter Google Maps Link" required>
          </div>
      </div>
            <div class="button">
                <input type="submit" name="register" value="Register">
            </div>
</div>
        </form>
    </div>
</div>
</body>
</html>

<?php
// // Database connection parameters
// $host = "localhost"; // Replace with your database host name or IP address
// $username = "root"; // Replace with your database username
// $password = ""; // Replace with your database password
// $database = "tourism_db"; // Replace with your database name

// // Create a database connection
$conn = connect();

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Get form data
    $hotelName = $_POST['hotelName'];
    $ownerName = $_POST['ownerName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $gstNumber = $_POST['gstNumber'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $location = $_POST['location'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO hotel_registration (ID,hotel_name, owner_name, email, phone_number, gst_number, address, pincode, city, state, location) VALUES (1,'$hotelName', '$ownerName', '$email', '$phoneNumber', '$gstNumber', '$address', '$pincode', '$city', '$state', '$location')";
    

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!" ;
        header("Location: Hotel Dashboard.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    
}
?>
