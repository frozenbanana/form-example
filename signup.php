<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $data = "Name: " . $name . ", Email: " . $email . PHP_EOL;

    $filename = 'signups.txt';

    file_put_contents($filename, $data, FILE_APPEND);

    echo "Thank you for signing up!";
} 
?>
