<?php
$host = "127.0.0.1";
$dbname = "sigma";
$port = "3307";
$user = "root";
$password_sql = "";
$dsn = "mysql:host={$host};dbname={$dbname};port={$port};";

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$database = new PDO($dsn, $user, $password_sql, $options);
