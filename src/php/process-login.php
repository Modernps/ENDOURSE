<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "flight_booking";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    die("Please fill in all fields.");
}

$sql = "SELECT id, email, password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL Error: " . $conn->error); // Debugging output
}

$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if (!$result) {
    die("Query Execution Failed: " . $stmt->error);
}

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../../flight-booking.html");
        exit();
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "No account found with this email.";
}

$stmt->close();
$conn->close();
?>

