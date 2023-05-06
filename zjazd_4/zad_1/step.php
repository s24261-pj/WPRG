<?php
if (!empty($_POST['save'])) {
    session_start();
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['number_of_people'] = $numberOfPeople = $_POST['number_of_people'];

    for ($i = 0; $i < $numberOfPeople; $i++) {
        $_SESSION["first_name_$i"] = $_POST["first_name_$i"];
        $_SESSION["last_name_$i"] = $_POST["last_name_$i"];
        $_SESSION["email_$i"] = $_POST["email_$i"];
    }
}

$first_name = $_POST['first_name'] ?? $_SESSION['first_name'];
$last_name = $_POST['last_name'] ?? $_SESSION['last_name'];
$email = $_POST['email'] ?? $_SESSION['email'];
$numberOfPeople = $_POST['number_of_people'] ?? $_SESSION['number_of_people'];
?>

<html lang="en">
<head>
    <title>Reservation step</title>
</head>

<body>
<h1>Reservation step</h1>

<form action="step.php" method="POST">
    <input type="hidden" name="first_name" value="<?= $first_name ?>">
    <input type="hidden" name="last_name" value="<?= $last_name ?>">
    <input type="hidden" name="email" value="<?= $email ?>">
    <input type="hidden" name="number_of_people" value="<?= $numberOfPeople ?>">

    <?php for ($i = 0; $i < $numberOfPeople; $i++) { ?>
        <p>Person <?= $i + 1?></p>
        <label for="first_name_<?= $i ?>">First name:</label>
        <input type="text" name="first_name_<?= $i ?>" id="first_name_<?= $i ?>" value="<?= $_SESSION["first_name_$i"] ?? "" ?>" required><br><br>

        <label for="last_name_<?= $i ?>">Last name:</label>
        <input type="text" name="last_name_<?= $i ?>" id="last_name_<?= $i ?>" value="<?= $_SESSION["last_name_$i"] ?? "" ?>" required><br><br>

        <label for="email_<?= $i ?>">E-mail:</label>
        <input type="email" name="email_<?= $i ?>" id="email_<?= $i ?>" value="<?= $_SESSION["email_$i"] ?? "" ?>" required><br><br><br>
    <?php } ?>

    <input type="submit" name="save" value="Save">
</form>

<form action="result.php">
    <input type="submit" value="Next">
</form>
</body>
</html>