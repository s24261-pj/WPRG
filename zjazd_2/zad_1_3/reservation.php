<?php
session_start();

$numberOfPeople = $_SESSION['number_of_people'];
$firstName = $_SESSION['first_name'];
$lastName = $_SESSION['last_name'];
$address = $_SESSION['address'];
$creditCard = $_SESSION['credit_card_number'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];
$hourOfArrival = $_SESSION['hour_of_arrival'];
$extraBed = $_SESSION['extra_bed'] ?? 0;
$amenities = $_SESSION['amenities'] ?? [];

echo "<h1>Reservation confirmation</h1>";
echo "<p>Personal data: {$firstName} {$lastName}</p>";
echo "<p>E-mail: {$email}</p>";
echo "<p>Address: {$address}</p>";
echo "<p>Credit card number: {$creditCard}</p>";
echo "<p>Number of people: {$numberOfPeople}</p>";
echo "<p>Date: {$date}</p>";
echo "<p>Hour of arrival: {$hourOfArrival}</p>";

if ($extraBed) {
    echo "<p>Extra bed: Yes</p>";
} else {
    echo "<p>Extra bed: No</p>";
}

if (!empty($amenities)) {
    echo "<p>Amenities: " . implode(", ", $amenities) . "</p>";
} else {
    echo "<p>Amenities: None </p>";
}

if (!empty($_POST)) {
    echo "<h1>Peoples</h1>";
    $i = 0;

    while ($i < $numberOfPeople) {
        $firstName = $_POST["first_name_" . $i];
        $lastName = $_POST["last_name_" . $i];
        $email = $_POST["email_" . $i];
        $i++;

        echo "<p>Person: $i</p>";
        echo "<p>First name: {$firstName}</p>";
        echo "<p>Last name: {$lastName}</p>";
        echo "<p>Email: {$email}</p><br>";
    }
}

session_destroy();