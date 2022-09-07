<?php

$host = '127.0.0.1';
$db   = 'delfinai';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

// INNER JOIN, LEFT JOIN, RIGHT JOIN
$sql = "
    SELECT *
    FROM users
    LEFT JOIN phones
    ON users.id = phones.user_id
";

$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();

echo '<pre>';
print_r($data);