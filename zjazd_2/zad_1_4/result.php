<?php
include ("../../zjazd_1/zad_3_4/index.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];

    echo Exercise_3_4::check_prime_number($number);
    echo "<br>";
    echo "Loop iterations: " . Exercise_3_4::$numberOfLoopIterations;
}
