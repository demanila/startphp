<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: /auth/authorization.php");
    exit();
}
$user = $_SESSION['user'];
echo "Привет, " . htmlspecialchars($user['login']) . "!";

if ($user['status'] === 'admin') {
    echo "<a href='/admin.php>Перейти на страницу администратора</a>";
}

?>