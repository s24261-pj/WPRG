<?php
$number = $_GET['number'];

class Factorial
{
    public static function recursive_factorial(int $number): int
    {
        if ($number == 0) return 1;

        return $number * self::recursive_factorial($number - 1);
    }

    public static function iterative_factorial(int $number): int
    {
        $result = 1;

        for ($i = 1; $i <= $number; $i++)
            $result *= $i;

        return $result;
    }

    public static function get_time(): float
    {
        return microtime(true) * 1000;
    }
}

$startTime = Factorial::get_time();
$recursiveResult = Factorial::recursive_factorial($number);
$endTime = Factorial::get_time();
$recursiveFactorialTime = $endTime - $startTime;

$startTime = Factorial::get_time();
$iterativeResult = Factorial::iterative_factorial($number);
$endTime = Factorial::get_time();
$iterativeFactorialTime = $endTime - $startTime;

if ($recursiveFactorialTime < $iterativeFactorialTime) {
    $differenceTime = $iterativeFactorialTime - $recursiveFactorialTime;

    echo "The recursive function runs $differenceTime sec faster and the result is $recursiveResult";
} else {
    $differenceTime = $recursiveFactorialTime - $iterativeFactorialTime;

    echo "The iterative function runs $differenceTime sec faster and the result is $iterativeResult";
}