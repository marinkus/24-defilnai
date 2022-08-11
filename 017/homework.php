<?php
if ('GET' === $_SERVER['REQUEST_METHOD']) {

    $color = $_GET['color'] ?? 2;

    if ($color == 1) {
        $bgColor = 'red';
    } else {
        $bgColor = 'black';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeworks</title>
    <link rel="stylesheet" href="./base.css">
</head>
<body style="background-color: <?=$bgColor?>">
    <h2 class='title'>#1</h2>
    <div class="container">
        <a href="http://localhost/defilnai/017/homework.php" class="link">Link #1</a>
        <a href="http://localhost/defilnai/017/homework.php?color=1" class="link" method='get'>Link #1</a>
    </div>
</body>
</html>