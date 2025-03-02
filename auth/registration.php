<?php
header('Content-Type: application/json; charset=utf-8');
$result = false;
$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["login"])) {
        $error[] = [
            'message' => 'Нет логина'
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
        $salt = 'littleOfSalt';
        $saltyPassword = $password . $salt;
        $hashedPassword = password_hash($saltyPassword, PASSWORD_BCRYPT);
        $filePath = 'users/' . $login . '.json';
        if (file_exists($filePath)) {
            $error[] = [
                'message' => 'Такой логин уже существует'
            ];
        } else {
            $userData = [
                'login' => $login,
                'password' => $hashedPassword,
            ];
            if (file_put_contents($filePath, json_encode($userData, JSON_PRETTY_PRINT))) {
                $result = true;
            } else {
                $error[] = [
                    'message' => 'Ошибка сохранения данных'
                ];
            }
        }
    }

}
echo json_encode([
    'result' => $result,
    'error' => $error
]);
?>