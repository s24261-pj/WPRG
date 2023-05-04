<?php

$visits = 0;
$visits_limit = 5;
$is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');

if (!$is_page_refreshed) {
    if (empty($_COOKIE["visits_counter"])) {
        $_COOKIE["visits_counter"] = 1;
        setcookie("visits_counter", 1);
    } else {
        setcookie("visits_counter", $_COOKIE['visits_counter'] += 1);
    }
}

echo "<h1> Number of visits: " . $_COOKIE["visits_counter"] . "</h1>";

if ($_COOKIE["visits_counter"] == $visits_limit) {
    echo "<h2> The site has reached 5 visits! </h2>";
}