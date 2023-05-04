<?php

$visits = 0;
$cookie_expiry = 3600;
$visits_limit = 5;

if (isset($_COOKIE["visits"])) {
    $visits = $_COOKIE["visits"];
}

$visits++;
setcookie("visits", $visits, $cookie_expiry);

echo "<h1> Number of visits: " . $visits . "</h1>";

if ($visits == $visits_limit) {
    echo "<h2> The site has reached 5 visits! </h2>";
}