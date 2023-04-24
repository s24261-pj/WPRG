<?php
$file = "ip.txt";

if (!file_exists($file)) {
    echo "<h1>Failed to open the file!</h1>";
    die();
}

$allowedAddresses = file($file, FILE_IGNORE_NEW_LINES);
$currentAddress = $_SERVER['REMOTE_ADDR'];

in_array($currentAddress, $allowedAddresses)
    ? include("allowed.html")
    : include("forbidden.html");
