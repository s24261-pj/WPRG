<html lang="en">
<head>
    <title>Cars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
    <li><a href="index.php">Strona główna</a></li>
    <li><a href="cars.php">Wszystkie samochody</a></li>
    <li><a href="add-car.php">Dodaj samochód</a></li>
</ul>

<h1>Samochody</h1>

<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=mojabaza", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM samochody ORDER BY rok";
    $result = $connection->query($query);

    if ($result->rowCount() > 0) {
        echo "<table><tr><th>ID</th><th>Marka</th><th>Model</th><th>Cena</th><th>Rok</th></tr>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td><a href='car.php?id={$row['id']}'>{$row['id']}</a></td><td>{$row['marka']}</td><td>{$row['model']}</td><td>{$row['cena']}</td><td>{$row['rok']}</td></tr>";
        }

        echo "</table>";
    } else {
        echo "Brak wyników";
    }
} catch (PDOException $e) {
    echo "Błąd połączenia: " . $e->getMessage();
}

$connection = null;
?>

</body>
</html>
