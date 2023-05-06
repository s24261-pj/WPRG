<html lang="en">
<head>
    <title>Reservation</title>
</head>

<body>
<h1>Reservation</h1>

<form action="step.php" method="POST">
    <label for="first_name">First name:</label>
    <input type="text" name="first_name" id="first_name" required><br><br>

    <label for="last_name">Last name:</label>
    <input type="text" name="last_name" id="last_name" required><br><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="number_of_people">Number of people:</label>
    <select name="number_of_people" id="number_of_people">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br><br>

    <input type="submit" value="Next">
</form>
</body>
</html>