<?php
session_start();

$numberOfPeople = $_POST['number_of_people'] ?? 0;
$_SESSION['number_of_people'] = $_POST['number_of_people'] ?? 0;
$_SESSION['first_name'] = $_POST['first_name'] ?? "";
$_SESSION['last_name'] = $_POST['last_name'] ?? "";
$_SESSION['address'] = $_POST['address'] ?? "";
$_SESSION['credit_card_number'] = $_POST['credit_card_number'] ?? "";
$_SESSION['email'] = $_POST['email'] ?? "";
$_SESSION['date'] = $_POST['date'] ?? "";
$_SESSION['hour_of_arrival'] = $_POST['hour_of_arrival'] ?? "";
$_SESSION['extra_bed'] = $_POST['extra_bed'] ?? 0;
$_SESSION['amenities'] = $_POST['amenities'] ?? [];
?>

<html lang="en">
<head>
    <title>Reservation step</title>
</head>

<body>
<h1>Reservation</h1>

<form action="reservation.php" method="POST">
    <?php for ($i = 0; $i < $numberOfPeople; $i++) { ?>
        <p>Person <?= $i + 1?></p>
        <label for="first_name_<?= $i ?>">First name:</label>
        <input type="text" name="first_name_<?= $i ?>" id="first_name_<?= $i ?>" required><br><br>

        <label for="last_name_<?= $i ?>">Last name:</label>
        <input type="text" name="last_name_<?= $i ?>" id="last_name_<?= $i ?>" required><br><br>

        <label for="email_<?= $i ?>">E-mail:</label>
        <input type="email" name="email_<?= $i ?>" id="email_<?= $i ?>" required><br><br><br>

        <input type="hidden" name="number_of_people" value="<?php $numberOfPeople ?>">
    <?php } ?>

    <input type="submit" value="Reservation">
</form>
</body>
</html>