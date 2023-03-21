<?php
class Exercise_2_1
{
    public static function get_random_element(int $index): int
    {
        return self::get_filled_array()[$index];
    }

    public static function get_filled_array(): array
    {
        $numbers = array();

        for($i = 0; $i < 5; $i++)
        {
            $numbers[] = self::get_random_number();
        }

        return $numbers;
    }

    private static function get_random_number(): int
    {
        return rand(1, 100);
    }
}

echo Exercise_2_1::get_random_element(2);
