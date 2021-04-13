<?php
$servername = "db";
$dbname = "product";
$username = "user";
$password = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
