<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header("Location: http://localhost/defilnai/018/7/index.php");
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 07</title>
    <link rel="stylesheet" href="../base.css">
</head>
<body style="background-color: <?= $_SERVER['REQUEST_METHOD'] == 'POST' ? '#FAFA33' : 'lime'?>">
    <div class="container">
        <div class="container">    
            <h2 class='title'>Uzduotis #7</h2>
            <form action="http://localhost/defilnai/018/7/index.php" method="get">
                <button type="submit" class='button'>GET</button>
            </form>
            <form action="http://localhost/defilnai/018/7/index.php" method="post">
                <button type="submit" class='button'>POST</button>
            </form>
            </div>
    </div>
</body>
</html>