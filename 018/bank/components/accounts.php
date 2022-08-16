<?php

$data = json_decode(file_get_contents(__DIR__ . '/data.json', 1), true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saskaitos</title>
</head>
<body>
    <ul>
    <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json', 1)) as $account) : ?>
                <li><?= $account[0] ?> <?= $account[1] ?> <?= $account[2] ?> <?= $account[3] ?> Funds: <?= $account[4] ?></li>
            <?php endforeach ?>
    </ul>
    
</body>
</html>