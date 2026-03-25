<?php
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// 🔥 Simulación (sin BD)
if ($email === "admin@ccp.com" && $password === "123456") {

    $_SESSION['user'] = $email;

    header("Location: dashboard.php");
    exit();

} else {
    header("Location: index.php?error=1");
    exit();
}
