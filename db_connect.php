<?php
$server = "localhost";
$user = "root";
$pw = "Admin";
$db = "termin";

$conn = mysqli_connect($server, $user, $pw, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
