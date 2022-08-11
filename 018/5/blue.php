<?php
if (isset($_GET['go'])) {
    header("Location: http://localhost/defilnai/018/5/red.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 5</title>
    <link rel="stylesheet" href="../base.css">
</head>
<body style="background-color: lightblue">
    <div class="container">    
        <a href="http://localhost/defilnai/018/5/blue.php?go" method="get" class="link">CLICK ME</a>
    </div>
</body>
</html>