<?php
session_start();

if (!isset($_SESSION['login_attempts_count'])) {
    $_SESSION['login_attempts_count'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $password = $_POST['password'];

    $correct_name = "nurzhan";
    $correct_password = "1234";

    if ($name === $correct_name && $password === $correct_password) {

        $_SESSION['name'] = $name;

        echo "Данные успешно сохранены.";

        header("Location: https://www.google.com");
        exit;
    } else {
        $_SESSION['login_attempts_count']++;

        if ($_SESSION['login_attempts_count'] < 3) {
            header("Location: error_page.html");
        } else {
            echo "Вы превысили лимит попыток входа. Доступ заблокирован.";
            exit;
        }
    }
}
