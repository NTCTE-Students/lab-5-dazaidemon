<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Валидация
    if (empty($username) || empty($password)) {
        echo "Все поля должны быть заполнены.";
        exit;
    }

    if (strlen($username) < 4) {
        echo "Имя пользователя должно содержать минимум 4 символа.";
        exit;
    }

    echo "Вход выполнен успешно!";
}
?>