<?php
$servername = "localhost";
$username = "id12473501_bookclub";
$password = "BookClubData";
$database = "id12473501_bookclub";
$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>