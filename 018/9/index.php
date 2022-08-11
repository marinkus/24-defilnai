<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $checked = count($_POST['c'] ?? []);
    header("Location: http://localhost/defilnai/018/9/index.php?all=".$checked);
}
$color = isset($_GET['all']) ? 'white' : 'black';
$aj = range('A', 'J');
$count = rand(3, 10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 09</title>
    <link rel="stylesheet" href="../base.css">
</head>
<body style="background-color: <?= $color ?>">
<?php if(isset($_GET['all'])) : ?>
    <h1>ALL CHECKED IS : <?= $_GET['all'] ?></h1>
    <a href="http://localhost/defilnai/018/9/index.php" class="button">Back to home</a>
    <?php else : ?>
    <div class="container"> 
            <h2 class='title'>Uzduotis #9</h2>
        <form action="http://localhost/defilnai/018/9/index.php" method='post'>
            <?php foreach(range(1, $count) as $number): ?>
                <input type="checkbox" name="c[]"/><?= $aj[$number - 1] ?>
            <?php endforeach ?>
            <button type="submit" class='button'>Go</button>
        </form>
    </div>
    <?php endif ?>
</body>
</html>