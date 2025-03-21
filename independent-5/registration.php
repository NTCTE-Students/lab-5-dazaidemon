<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    
    // Валидация
    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "Все поля должны быть заполнены.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Пароли не совпадают.";
        exit;
    }

    echo "Регистрация успешна!";
}
?>
