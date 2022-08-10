<?php

$cat = 'Murka';

// POST scenarijus
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    
    $rap = $_POST['rapolas'] ?? 'Nieko nera'; 

    if (!file_exists(__DIR__ . '/data.json')) {
        file_put_contents(__DIR__ . '/data.json', json_encode([]));
    }

    $data = json_decode(file_get_contents(__DIR__ . '/data.json', 1));

    $data[] = $rap;

    file_put_contents(__DIR__ . '/data.json', json_encode($data));

    header("Location: http://localhost/defilnai/017/");
    die;
    
}

// GET scenarijus


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 017</title>
</head>
<body>
    <a href="http://localhost/defilnai/017/index.php">Linkas</a>

    <form action="http://localhost/defilnai/017/index.php" method="post">

        <input type="text" name="rapolas">
        <button type="submit"><?= $cat ?></button>
    </form>



</body>
</html>