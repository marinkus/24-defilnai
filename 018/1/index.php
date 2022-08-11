<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 01</title>
    <link rel="stylesheet" href="../base.css">
</head>
<body style="background-color: <?= isset($_GET['color']) ? 'crimson' : 'black'?>">
    <div class="container">
        <h2 class='title'>Uzduotis #1</h2>
        <a href="http://localhost/defilnai/018/1/index.php" class="link">Be nieko</a>
        <a href="http://localhost/defilnai/018/1/index.php?color=1" class="link" method='get'>Su kazkuo</a>
    </div>
</body>
</html>