<?php
class Exercise_3_3
{
    public static function get_multiplication_table(int $side): void
    {
        for ($i = 0; $i <= $side; $i++) {
            for ($j = 0; $j <= $side; $j++) {
                if ($i == 0)
                    echo " " . $j . " ";
                elseif ($j == 0)
                    echo " " . $i . " ";
                else
                    echo " " . $i * $j . " ";
            }

            echo "<br>";
        }
    }
}

echo Exercise_3_3::get_multiplication_table(10);