<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && $password == $user['password']) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            
            // Update last login time
            $updateStmt = $pdo->prepare("UPDATE users SET last_login = CURRENT_TIMESTAMP WHERE id = ?");
            $updateStmt->execute([$user['id']]);

            header("Location: ../../flight-booking.php");
            exit();
        } else {
            header("Location: ../../login.php?error=invalid");
            exit();
        }
    } catch(PDOException $e) {
        header("Location: ../../login.php?error=server");
        exit();
    }
}

// Redirect if accessed directly without POST
header("Location: ../../login.php");
exit();

