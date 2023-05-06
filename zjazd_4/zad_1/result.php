<?php
session_start();

$numberOfPeople = $_SESSION['number_of_people'] ?? "";
$firstName = $_SESSION['first_name'] ?? "";
$lastName = $_SESSION['last_name'] ?? "";
$email = $_SESSION['email'] ?? "";

if (in_array("", [$numberOfPeople, $firstName, $lastName, $email])) {
    echo "<h1>Out of data</h1>";
    die();
}

echo "<h1>Reservation confirmation</h1>";
echo "<p>Personal data: {$firstName} {$lastName}</p>";
echo "<p>E-mail: {$email}</p>";
echo "<p>Number of people: {$numberOfPeople}</p>";

if ($numberOfPeople) {
    echo "<h1>Peoples</h1>";
    $i = 0;

    while ($i < $numberOfPeople) {
        $firstName = $_SESSION["first_name_" . $i];
        $lastName = $_SESSION["last_name_" . $i];
        $email = $_SESSION["email_" . $i];
        $i++;

        echo "<p>Person: $i</p>";
        echo "<p>First name: {$firstName}</p>";
        echo "<p>Last name: {$lastName}</p>";
        echo "<p>Email: {$email}</p><br>";
    }
}

session_destroy();