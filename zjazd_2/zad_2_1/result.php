<?php
$dateOfBirth = $_GET['date_of_birth'];

class DateOfBirth
{
    public static function get_day_of_week($date): string
    {
        return date('l', strtotime($date));
    }

    public static function get_years($date): int
    {
        return date_diff(date_create($date), date_create())->y;
    }

    public static function get_days_to_next_birthday($date): bool|int
    {
        $birthday = new DateTime($date);

        $nextBirthday = new DateTime(date('Y') . '-' . $birthday->format('m-d'));
        $nextBirthday->modify('+1 year');

        return $nextBirthday->diff(new DateTime('now'))->days;
    }
}

echo "Day of birth: " . DateOfBirth::get_day_of_week($dateOfBirth);
echo "<br>";
echo "Years: " . DateOfBirth::get_years($dateOfBirth);
echo "<br>";
echo "Days to next birthday: " . DateOfBirth::get_days_to_next_birthday($dateOfBirth);