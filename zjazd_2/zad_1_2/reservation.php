<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numberOfPeople = $_POST['number_of_people'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $creditCard = $_POST['credit_card_number'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $hourOfArrival = $_POST['hour_of_arrival'];
    $extraBed = $_POST['extra_bed'] ?? 0;
    $amenities = $_POST['amenities'] ?? [];

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
}