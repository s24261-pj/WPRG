<html lang="en">
<head>
    <title>Reservation</title>
</head>

<body>
<h1>Reservation</h1>

<form action="reservation-step.php" method="POST">
    <label for="first_name">First name:</label>
    <input type="text" name="first_name" id="first_name" required><br><br>

    <label for="last_name">Last name:</label>
    <input type="text" name="last_name" id="last_name" required><br><br>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required><br><br>

    <label for="credit_card_number">Credit card number:</label>
    <input type="text" name="credit_card_number" id="credit_card_number" required><br><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="number_of_people">Number of people:</label>
    <select name="number_of_people" id="number_of_people">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br><br>

    <label for="date">Date:</label>
    <input type="date" name="date" id="date" required><br><br>

    <label for="hour_of_arrival">Hour of arrival:</label>
    <input type="time" name="hour_of_arrival" id="hour_of_arrival" required><br><br>

    <label for="extra_bed">Extra bed:</label>
    <input type="checkbox" name="extra_bed" id="extra_bed" value="1"><br><br>

    <label for="amenities">Amenities:</label><br>

    <input type="checkbox" name="amenities[]" id="air_conditioning" value="Air conditioning">
    <label for="air_conditioning">Air conditioning</label><br>

    <input type="checkbox" name="amenities[]" id="ashtray" value="Ashtray">
    <label for="ashtray">Ashtray</label><br><br>

    <input type="submit" value="Next">
</form>
</body>
</html>