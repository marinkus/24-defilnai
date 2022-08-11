<?php
function doColor() {
    if (!isset($_GET['color'])) {
        return 'black';
    }
    $color = $_GET['color'];
    if (preg_match('/[0-9A-F]{6}/i', $color)) {
        return $color;
    }
    return $color;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 03</title>
    <link rel="stylesheet" href="../base.css">
</head>
<body style="background: <?= doColor() ?>">
    <div class="container">
        <h2 class='title'>Uzduotis #3</h2>
        <a href="http://localhost/defilnai/018/3/index.php" class="link">Be nieko</a>
        <form action="http://localhost/defilnai/018/3/index.php" method='get'>
            <input type="color" name="color">
            <button type="submit">Do IT</button>
        </form>
    </div>
</body>
</html>