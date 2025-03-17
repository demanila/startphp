<?php
require_once "auth/users/User.php";
session_start();

if (!\users\User::isLoggedIn()) {
    header("Location: /auth/authorization.php");
    exit();
}
$user = $_SESSION['user'];
echo "Привет, " . htmlspecialchars($user['login']) . "!";

if ($user['status'] === 'admin') {
    echo "<a href='/admin.php>Перейти на страницу администратора</a>";
}

?>