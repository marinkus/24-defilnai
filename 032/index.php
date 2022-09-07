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

// SELECT column1, column2, ...
// FROM table_name;

$sql = "
    SELECT id, type, height, title 
    FROM trees
    ORDER BY type DESC, title
";

$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $sql = "
    DELETE FROM trees
    WHERE id = " . $_POST['id'];

    $pdo->query($sql);
    header('Location: http://localhost/defilnai/032/index.php');
    die;
}
?>

<ul>
    <?php
    foreach ($data as $t) : ?>
    <li>ID: <?= $t['id'] ?> Type: <?= ['Palme', 'Spygliuotis', 'Lapuotis'][$t['type'] - 1] ?> Height: <?= $t['height'] ?>m Title: <?= $t['title'] ?></li>
    <?php endforeach ?>
</ul><br>

<form action="" method="post">
    ID: <input type="text" name="id"><br>
    <button type="submit">Delete</button>
</form>