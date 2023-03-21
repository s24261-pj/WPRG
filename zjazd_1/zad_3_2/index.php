<?php
class Exercise_3_2
{
    public static function get_rolls_results(int $rolls): string
    {
        $rollsResults = array();

        for ($count = 0; $count < $rolls; $count++) {
            $rollsResults[] = rand(1, 6);
        }

        return implode(", ", $rollsResults);
    }
}

echo "Tablica wyników: " . Exercise_3_2::get_rolls_results(7);
