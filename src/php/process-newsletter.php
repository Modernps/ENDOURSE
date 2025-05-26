<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flight_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];

$email = mysqli_real_escape_string($conn, $email);

$sql = "INSERT INTO subscribers (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Subscription successful!'); window.location.href='../../flight-booking.html';</script>";
} else {
    echo "<script>alert('Error: Email might already be subscribed!'); window.location.href='../../flight-booking.html';</script>";
}
if ($conn->query($sql) === TRUE) {
    header("Location: ../../flight-booking.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>