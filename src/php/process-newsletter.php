<?php
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";      // Default XAMPP password is empty
$dbname = "flight_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get email from form
$email = $_POST['email'];

// Prevent SQL Injection
$email = mysqli_real_escape_string($conn, $email);

// Insert into database
$sql = "INSERT INTO subscribers (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Subscription successful!'); window.location.href='../../flight-booking.html';</script>";
} else {
    echo "<script>alert('Error: Email might already be subscribed!'); window.location.href='../../flight-booking.html';</script>";
}
if ($conn->query($sql) === TRUE) {
    // Redirect to account.html after successful submission
    header("Location: ../../flight-booking.html");
    exit(); // Ensure script stops executing after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>