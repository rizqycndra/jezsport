<?php

$hostname = "localhost";
$username = "quax2231";
$password = "odd12345678901234567890";
$database = "quax2231_jezsport";

$username = "root"; $password= "";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Error");
}