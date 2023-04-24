<?php

function show_visits_count(int $count): void
{
    echo "<h1> Number of visits: " . $count . "</h1>";
}

$file = "licznik.txt";

if(!file_exists($file)) {
    $fp = fopen($file, "w");
    fwrite($fp, "1");
    fclose($fp);

    show_visits_count(1);
    die();
}

$fp = fopen($file, "r");
$counter = fgets($fp);
$counter++;
fclose($fp);

$fp = fopen($file, "w");
fwrite($fp, $counter);
fclose($fp);

show_visits_count($counter);
