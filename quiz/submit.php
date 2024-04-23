<?php

$correct_answers = array(
    "q1" => "c",
    "q2" => "c",
    "q3" => "a",
    "q4" => "a",
    "q5" => "c",
    "q6" => "a",
    "q7" => "c",
    "q8" => "c",
    "q9" => "b",
    "q10" => "c"
);

$total_questions = count($correct_answers);
$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<h2>Результат теста</h2>';
    echo '<div class="result">';

    foreach ($correct_answers as $question => $answer) {
        if (!empty($_POST[$question])) {
            $user_answer = $_POST[$question];
            if ($user_answer == $answer) {
                $score += 10;
                echo '<p style="color:green;">' . $question . ': ' . $user_answer . ' - Верно</p>';
            } else {
                echo '<p style="color:red;">' . $question . ': ' . $user_answer . ' - Неверно</p>';
            }
        }
    }

    echo '</div>';

    $result_text = "";
    if ($score >= 90) {
        $result_text = "Отлично! Ваш результат: ";
    } elseif ($score >= 80) {
        $result_text = "Хорошо! Ваш результат: ";
    } elseif ($score >= 70) {
        $result_text = "Удовлетворительно! Ваш результат: ";
    } else {
        $result_text = "Ваш результат: ";
    }

    echo '<div class="score">' . $result_text . $score . '/' . $total_questions * 10 . ' баллов</div>';
}
