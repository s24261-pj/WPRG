<html lang="en">
<head>
    <title>Calculator</title>
</head>

<body>
<h1>Calculator</h1>

<form action="calculator.php" method="POST">
    <label for="first_number">First number:</label>
    <input type="number" name="first_number" id="first_number" required><br><br>

    <label for="second_number">Second liczba:</label>
    <input type="number" name="second_number" id="second_number" required><br><br>

    <label for="operation">Operation:</label>
    <select name="operation" id="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>
</body>
</html>