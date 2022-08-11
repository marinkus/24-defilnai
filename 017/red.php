<?php
if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $redir = $_GET['redir'] ?? 2;
    if ($redir == 1) {
        header("Location: http://localhost/defilnai/017/blue.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW#4</title>
</head>
<body style="background-color: red">
    <a href="http://localhost/defilnai/017/red.php?redir=1" method="get">CLICK ME</a>
    
</body>
</html>