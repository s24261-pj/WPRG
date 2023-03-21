<?php
class Exercise_2_2
{
    const NATIONALITIES = array(
        "Polska" => "polak",
        "Niemcy" => "niemiec",
        "Francja" => "francuz"
    );

    public static function get_nationality_by_country(string $country): string
    {
        return self::NATIONALITIES[$country];
    }
}

echo "Moja narodowaność to: " . Exercise_2_2::get_nationality_by_country("Polska");
