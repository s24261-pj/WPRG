<html lang="en">
<head>
    <title>Wszystkie samochody</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
    <li><a href="index.php">Strona główna</a></li>
    <li><a href="cars.php">Wszystkie samochody</a></li>
    <li><a href="add-car.php">Dodaj samochód</a></li>
</ul>

<h1>Dodaj samochód</h1>

<form method="POST">
    <label for="marka">Marka:</label>
    <input type="text" name="marka" id="marka" required><br>

    <label for="model">Model:</label>
    <input type="text" name="model" id="model" required><br>

    <label for="cena">Cena:</label>
    <input type="number" name="cena" id="cena" required><br>

    <label for="rok">Rok produkcji:</label>
    <input type="number" name="rok" id="rok" required><br>

    <label for="opis">Opis:</label>
    <textarea name="opis" id="opis" required></textarea><br><br>
    <input type="submit" value="Dodaj samochód">
</form>

<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=mojabaza", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $brand = $_POST['marka'];
        $model = $_POST['model'];
        $price = $_POST['cena'];
        $year = $_POST['rok'];
        $desc = $_POST['opis'];

        $query = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES (?, ?, ?, ?, ?)";

        try {
            $result = $connection->prepare($query);
            $result->execute([$brand, $model, $price, $year, $desc]);
            echo 'Samochód został dodany do bazy danych.';
        } catch (PDOException $e) {
            echo 'Błąd zapytania: ' . $e->getMessage();
        }
    }
} catch (PDOException $e) {
    echo "Błąd połączenia: " . $e->getMessage();
}

$connection = null;
?>

</body>
</html>
