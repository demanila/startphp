<?php
require_once "users/User.php";
session_start();
header('Content-Type: application/json; charset=utf-8');

if (\users\User::isLoggedIn()) {
    header("Location: /lk.php");
    exit ();
}

$result = false;
$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["login"]) || !isset($_POST["password"])) {
        $error[] = [
            "message" => 'Нет логина или пароля'
        ];
    }

    if (empty($error)) {
        $user = new \users\User($_POST["login"], $_POST["password"]);
        $result = $user->register();
    }
}

echo json_encode([
    'result' => $result,
    'error' => $error
]);

?>


