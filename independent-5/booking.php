<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $date = htmlspecialchars(trim($_POST['date']));
    $time = htmlspecialchars(trim($_POST['time']));

    // Валидация
    if (empty($name) || empty($date) || empty($time)) {
        echo "Все поля должны быть заполнены.";
        exit;
    }

    if (!DateTime::createFromFormat('Y-m-d', $date)) {
        echo "Некорректный формат даты.";
        exit;
    }

    if (!DateTime::createFromFormat('H:i', $time)) {
        echo "Некорректный формат времени.";
        exit;
    }

    echo "Бронирование успешно!";
}
?>