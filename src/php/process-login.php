<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: ../../login.php?error=empty_fields");
        exit();
    }

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && $password === $user['password']) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['passworf'] = $user['password'];
            
            $updateStmt = $pdo->prepare("UPDATE users SET last_login = CURRENT_TIMESTAMP WHERE id = ?");
            $updateStmt->execute([$user['id']]);

            header("Location: ../../flight-booking.php");
            exit();
        } else {
            header("Location: ../../login.php?error=invalid_credentials");
            exit();
        }
    } catch(PDOException $e) {
        header("Location: ../../login.php?error=server_error");
        exit();
    }
}

header("Location: ../../login.php");
exit();

