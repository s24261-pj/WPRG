<?php

$file = "links.txt";

if (!file_exists($file)) {
    echo "<h1>Failed to open the file!</h1>";
    die();
}

$links = file($file);

echo "<ul>";

foreach ($links as $link) {
    list($url, $description) = explode(";", $link);
    echo "<li><a href=\"$url\">$description</a></li>";
}

echo "</ul>";
