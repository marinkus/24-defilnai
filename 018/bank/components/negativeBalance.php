<?php
if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $error = $_GET['error'] ?? 0;
    if ($error == 1) {
            header("Location: http://localhost/defilnai/018/bank/components/accounts.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error!</title>
</head>
<body>
    <h2>Not enough money</h2>
    <a href="http://localhost/defilnai/018/bank/components/negativeBalance.php?error=1" method='get'>Back to accounts</a>
</body>
</html>