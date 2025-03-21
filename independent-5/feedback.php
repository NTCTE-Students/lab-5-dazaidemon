<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Валидация
    if (empty($name) || empty($email) || empty($message)) {
        echo "Все поля должны быть заполнены.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Некорректный формат электронной почты.";
        exit;
    }

    if (strlen($message) < 10) {
        echo "Сообщение должно содержать не менее 10 символов.";
        exit;
    }

    echo "Спасибо за ваше сообщение!";
}
?>