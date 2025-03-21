<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));

    // Валидация
    if (empty($email)) {
        echo "Поле электронной почты должно быть заполнено.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Некорректный формат электронной почты.";
        exit;
    }

    echo "Вы успешно подписаны на рассылку!";
}
?>