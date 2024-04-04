<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    echo "<strong>Аты:</strong> $first_name <br>";
    echo "<strong> Фамилиясы:</strong> $last_name";
} else {
    echo "Қате, форма жіберілген жоқ.";
}

