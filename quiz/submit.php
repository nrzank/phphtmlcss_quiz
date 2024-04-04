<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат теста</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
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
        foreach ($correct_answers as $question => $answer) {
            if (!empty($_POST[$question])) {
                $user_answer = $_POST[$question];
                if ($user_answer == $answer) {
                    $score += 10;
                }
            }
        }

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

        echo '<div class="result">' . $result_text . $score . '/' . $total_questions * 10 . ' баллов</div>';
        echo '<div class="score">' . $score . '/' . $total_questions * 10 . ' баллов</div>';
    }
    ?>
</div>
</body>
</html>
