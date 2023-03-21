<?php

require_once("figures.php");

class Exercise_1_5
{
    /**
     * @throws Exception
     */
    public static function calculate_area(int $figure, int $base, ?int $height, ?int $side): float|int
    {
        return match ($figure) {
            Figures::Triangle => self::get_triangle_area($base, $height),
            Figures::Rectangle => self::get_rectangle_area($base, $side),
            Figures::Trapeze => self::get_trapeze_area($base, $side, $height),
            default => throw new Exception("Nie ma takiej figury"),
        };
    }

    private static function get_triangle_area(int $a, int $h): float|int
    {
        return ($a * $h) / 2;
    }

    private static function get_rectangle_area(int $a, int $b): float|int
    {
        return $a * $b;
    }

    private static function get_trapeze_area(int $a, int $b, int $h): float|int
    {
        return (($a + $b) * $h) / 2;
    }
}

echo "Pole trojkata: " . Exercise_1_5::calculate_area(Figures::Triangle, 2, 3, null);
echo "<br>";
echo "Pole prostokata: " . Exercise_1_5::calculate_area(Figures::Rectangle, 2, null, 3);
echo "<br>";
echo "Pole trapezu: " . Exercise_1_5::calculate_area(Figures::Trapeze, 2, 3, 4);
