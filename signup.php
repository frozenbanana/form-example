<h1>You have registered</h1>

<?php

// var_dump($_GET);

// Get information from form
$nameFromForm = $_GET["name"];
$emailFromForm = $_GET["email"];

// send it to browser DOM

echo("You have registered " . $nameFromForm . " with " . $emailFromForm . ". Thank You!");


// Write information to textfile
$data = $nameFromForm . ", " . $emailFromForm . PHP_EOL;

file_put_contents("signups.txt", $data, FILE_APPEND);

?>