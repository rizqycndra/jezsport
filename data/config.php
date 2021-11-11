<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'jezsport';

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die('Database Connect Failed');
}