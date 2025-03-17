<?php

namespace users;

class User
{
    private string $login;
    private string $password;
    private $status;
    private string $filePath;

    public function __construct($login, $password)
    {
        $this->login = htmlspecialchars($login);
        $this->password = htmlspecialchars($password);
        $this->filePath = 'users/' . $this->login . '.json';

    }

    public function register(): array
    {
        if (file_exists($this->filePath)) {
            return [
                'error' => 'Такой логин уже существует'
            ];
        }
        $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
        $userData = [
            'login' => $this->login,
            'password' => $hashedPassword,
            'status' => 'manager',
        ];
        if (file_put_contents($this->filePath, json_encode($userData, JSON_PRETTY_PRINT))) {
            return [
                'result' => true
            ];
        } else {
            return [
                'result' => 'Ошибка сохранения данных'
            ];
        }

    }

    public function login(): array
    {
        if (!file_exists($this->filePath)) {
            return [
                'error' => 'Такого пользователя не существует'
            ];
        }

        $userData = json_decode(file_get_contents($this->filePath), true);

        if (password_verify($this->password, $userData['password'])) {
            $_SESSION['user'] = [
                'login' => $userData['login'],
                'status' => $userData['status']
            ];
            return [
                'result' => true
            ];
        } else {
            return [
                'error' => 'Пароль неверный'
            ];
        }
    }

    public static function getCurrentUser()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    public static function isLoggedIn(): bool
    {
        return isset($_SESSION['user']);
    }
}

?>

