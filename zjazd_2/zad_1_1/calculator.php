<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstNumber = $_POST['first_number'];
    $secondNumber = $_POST['second_number'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'addition':
            $result = $firstNumber + $secondNumber;
            echo "Result: $result";
            break;
        case 'subtraction':
            $result = $firstNumber - $secondNumber;
            echo "Result: $result";
            break;
        case 'multiplication':
            $result = $firstNumber * $secondNumber;
            echo "Result: $result";
            break;
        case 'division':
            $result = $firstNumber / $secondNumber;
            echo "Result: $result";
    }
}