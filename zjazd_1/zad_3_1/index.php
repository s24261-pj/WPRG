<?php
class Exercise_3_1
{
    public static function get_max_number_from_for_loop(): int
    {
        $numbers = self::get_random_numbers_array();
        $max_number = 0;

        for ($count = 0; $count < count($numbers); $count++) {
            if ($max_number < $numbers[$count])
                $max_number = $numbers[$count];
        }

        return $max_number;
    }

    public static function get_max_number_from_while_loop(): int
    {
        $numbers = self::get_random_numbers_array();
        $max_number = 0;
        $count = 0;

        while ($count < count($numbers)) {
            if ($max_number < $numbers[$count])
                $max_number = $numbers[$count];

            $count++;
        }

        return $max_number;
    }

    public static function get_max_number_from_do_while_loop(): int
    {
        $numbers = self::get_random_numbers_array();
        $max_number = 0;
        $count = 0;

        do {
            if ($max_number < $numbers[$count])
                $max_number = $numbers[$count];

            $count++;
        } while ($count < count($numbers));

        return $max_number;
    }

    public static function get_max_number_from_foreach_loop(): int
    {
        $numbers = self::get_random_numbers_array();
        $max_number = 0;

        foreach ($numbers as $number) {
            if ($max_number < $number)
                $max_number = $number;
        }

        return $max_number;
    }

    private static function get_random_numbers_array(): array
    {
        $numbers = array();

        for ($i = 0; $i < 5; $i++) {
            $numbers[] = rand(1, 100);
        }

        return $numbers;
    }
}

echo Exercise_3_1::get_max_number_from_for_loop();
echo "<br>";
echo Exercise_3_1::get_max_number_from_while_loop();
echo "<br>";
echo Exercise_3_1::get_max_number_from_do_while_loop();
echo "<br>";
echo Exercise_3_1::get_max_number_from_foreach_loop();
