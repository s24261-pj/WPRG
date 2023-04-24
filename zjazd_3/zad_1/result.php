<?php
if(isset($_POST['submit'])) {
    $file = $_FILES['file']['tmp_name'];

    if (!file_exists($file)) {
        echo "<h1>Failed to open the file!</h1>";
    } else {
        $lines = file($file);
        $reversed_lines = array_reverse($lines);

        echo "<h1>Wynik:</h1>";
        foreach($reversed_lines as $line) {
            echo $line . "<br />";
        }
    }
}