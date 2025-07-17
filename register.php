<?php
$name = $_POST['name'];
$email = $_POST['email'];
$event = $_POST['event'];

$file = fopen("registrations.txt", "a");
fwrite($file, "$name, $email, $event\n");
fclose($file);

echo "Registered successfully!";
?>
