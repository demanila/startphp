<?php
header('Content-Type: application/json; charset=utf-8');
$result = false;
$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["login"])) {
        $error[] = [
            "message" => 'Нет логина'
        ];
    }
    if (!isset($_POST["password"])) {
        $error[] = [
            'message' => 'Нет пароля'
        ];
    }
    if (empty($error)) {
        $login = htmlspecialchars($_POST["login"]);
        $password = htmlspecialchars($_POST["password"]);
        $filePath = 'users/' . $login . '.json';
        if (file_exists($filePath)) {
            $userData = json_decode(file_get_contents($filePath), true);
        } else {
            $error[] = [
                'message' => 'Нет такого пользователя'
            ];
        }
    }
}

echo json_encode([
    'result' => $result,
    'error' => $error
]);

?>