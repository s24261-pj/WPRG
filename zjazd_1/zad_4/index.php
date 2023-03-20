<?php
class Exercise_1_4
{
    public static function get_birthday_from_pesel($pesel): string
    {
        $dayOfBirth = substr($pesel, 4, 2);
        $monthOfBirth = substr($pesel, 2, 2);
        $yearOfBirth = substr($pesel, 0, 2);

        if ($monthOfBirth > 20) {
            $monthOfBirth = $monthOfBirth - 20 < 10
                ? "0" . ($monthOfBirth - 20)
                : $monthOfBirth - 20;
        }

        return "Data urodzenia: $dayOfBirth-$monthOfBirth-$yearOfBirth";
    }
}

echo Exercise_1_4::get_birthday_from_pesel("99102301759");
