<?php
class Exercise_1_2
{
    public static function get_diameter($r): float|int
    {
        return ($r * 2);
    }
}

echo Exercise_1_2::get_diameter(4);
