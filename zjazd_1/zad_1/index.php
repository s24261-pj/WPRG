<?php
class Exercise_1_1
{
    public static function get_result(): int
    {
        return rand(1, 6);
    }
}

echo Exercise_1_1::get_result();
