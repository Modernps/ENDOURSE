<?php
session_start();

$host = "localhost";
$username = "root"; 
$password = "";
$database = "flight_booking"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$phone = $_POST['phoneno'];


if (!preg_match('/^\d{10}$/', $phone)) {
    $_SESSION['message'] = "Invalid phone number. Please enter a 10-digit phone number.";
    header("Location: fb.html");
    exit();
}

$sql = "SELECT * FROM users WHERE phone_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $phone);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['message'] = "Login successful. Welcome back!";
} else {
    $sql_insert = "INSERT INTO users (phone_number) VALUES (?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("s", $phone);
    
    if ($stmt_insert->execute()) {
        $_SESSION['message'] = "Sign-up successful. Welcome!";
    } else {
        $_SESSION['message'] = "Error: " . $stmt_insert->error;
    }
}

$stmt->close();
$conn->close();

header("Location: ../../flight-booking.html");
exit();
?>

