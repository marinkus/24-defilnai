<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {
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

    // INSERT INTO table_name (column1, column2, column3, ...)
    // VALUES (value1, value2, value3, ...);

    $sql = "
UPDATE trees
SET type = :t, height = :h, title = :title
WHERE id = :id
";



    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        [
            't' => $_POST['type'],
            'h' => $_POST['height'],
            'title' => $_POST['title'],
            'id' => $_POST['id']
        ]
    );

    header('Location: http://localhost/defilnai/032/');
    die;
}
?>

<form action="" method="post">
    ID: <input type="text" name="id"> </br></br>
    Title: <input type="text" name="title"> </br></br>
    Height: <input type="text" name="height"> </br></br>
    <select name="type">
        <option value="1">Lapuotis</option>
        <option value="2">Spygliuotis</option>
        <option value="3">Palmė</option>
    </select></br></br>
    <button type="submit">Change It!</button>
</form>