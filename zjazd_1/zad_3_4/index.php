<?php
class Exercise_3_4
{
    static public int $numberOfLoopIterations = 0;

    public static function check_prime_number(int $number): string
    {
        $isPrimeNumber = self::is_prime_number($number);

        return $isPrimeNumber
            ? "Liczba $number jest liczba pierwsza"
            : "Liczba $number nie jest liczba pierwsza";
    }

    private static function is_prime_number(int $number): bool
    {
        if ($number < 2) return false;

        for ($i = 2; $i * $i <= $number; $i++) {
            self::$numberOfLoopIterations++;

            if ($number % $i == 0) return false;
        }

        return true;
    }
}

echo Exercise_3_4::check_prime_number(97);
echo "<br>";
echo "Liczba iteracji pętli: " . Exercise_3_4::$numberOfLoopIterations;
