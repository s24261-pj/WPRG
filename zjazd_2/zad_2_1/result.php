<?php
$dateOfBirth = $_GET['date_of_birth'];

class DateOfBirth
{
    public static function getDayOfWeek($date): string
    {
        return date('l', strtotime($date));
    }

    public static function getYears($date): int
    {
        return date_diff(date_create($date), date_create())->y;
    }

    public static function getDaysToNextBirthday($date): bool|int
    {
        $birthday = new DateTime($date);

        $nextBirthday = new DateTime(date('Y') . '-' . $birthday->format('m-d'));
        $nextBirthday->modify('+1 year');

        return $nextBirthday->diff(new DateTime('now'))->days;
    }
}

echo "Day of birth: " . DateOfBirth::getDayOfWeek($dateOfBirth);
echo "<br>";
echo "Years: " . DateOfBirth::getYears($dateOfBirth);
echo "<br>";
echo "Days to next birthday: " . DateOfBirth::getDaysToNextBirthday($dateOfBirth);