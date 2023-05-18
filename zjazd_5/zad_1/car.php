<html lang="en">
<head>
    <title>Samochód</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
    <li><a href="index.php">Strona główna</a></li>
    <li><a href="cars.php">Wszystkie samochody</a></li>
    <li><a href="add-car.php">Dodaj samochód</a></li>
</ul>


<?php
if (!isset($_GET['id'])) {
    echo 'Nieprawidłowe id samochodu.';
    exit();
}

$id = $_GET['id'];

try {
    $connection = new PDO("mysql:host=localhost;dbname=mojabaza", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM samochody WHERE id = $id";
    $result = $connection->query($query);

    if ($result->rowCount() > 0) {
        $car = $result->fetch(PDO::FETCH_ASSOC);

        echo '<h1>Informacje o samochodzie</h1>';
        echo '<p><strong>ID:</strong> ' . $car['id'] . '</p>';
        echo '<p><strong>Marka:</strong> ' . $car['marka'] . '</p>';
        echo '<p><strong>Model:</strong> ' . $car['model'] . '</p>';
        echo '<p><strong>Cena:</strong> ' . $car['cena'] . '</p>';
        echo '<p><strong>Rok:</strong> ' . $car['rok'] . '</p>';
        echo '<a href="index.php">Powrót</a>';

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
