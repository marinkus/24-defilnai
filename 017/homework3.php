<?php
if ('GET' === $_SERVER['REQUEST_METHOD']) {

    $color = $_GET['color'] ?? 2;

    if ($color == 2) {
        $bgColor = 'black';
    } else {
        $bgColor = $color;
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
<body style="background-color: #<?=$bgColor?>">
    <h2 class='title'>#3</h2>
    <form action="http://localhost/defilnai/017/homework3.php?color=" method="get">
        <input type="text" name="color">
        <button type="submit">Submit</button>
    </form>
</body>
</html>