<?php
session_start(); // Start session to store messages

// Database connection
$host = "localhost";  // Change if using a remote database
$username = "root";   // Your database username
$password = "";       // Your database password
$database = "flight_booking"; // Your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get phone number from the form
$phone = $_POST['phoneno'];

// Validate phone number
if (!preg_match('/^\d{10}$/', $phone)) {
    $_SESSION['message'] = "Invalid phone number. Please enter a 10-digit phone number.";
    header("Location: fb.html"); // Redirect back
    exit();
}

// Check if phone number exists in the database
$sql = "SELECT * FROM users WHERE phone_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $phone);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // User exists, login successful
    $_SESSION['message'] = "Login successful. Welcome back!";
} else {
    // User not found, insert into database (sign-up)
    $sql_insert = "INSERT INTO users (phone_number) VALUES (?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("s", $phone);
    
    if ($stmt_insert->execute()) {
        $_SESSION['message'] = "Sign-up successful. Welcome!";
    } else {
        $_SESSION['message'] = "Error: " . $stmt_insert->error;
    }
}

// Close the connection
$stmt->close();
$conn->close();

// Redirect back to the flight booking page
header("Location: ../../flight-booking.html");
exit();
?>


