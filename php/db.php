<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'smarty_shop';

$db = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}