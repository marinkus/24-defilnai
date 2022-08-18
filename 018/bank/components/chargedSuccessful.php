<?php
if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $success = $_GET['success'] ?? 0;
    if ($success == 1) {
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
    <title>Funds added</title>
</head>
<body>
    <h2>Transaction successful!</h2>
    <a href="http://localhost/defilnai/018/bank/components/chargedSuccessful.php?success=1" method='get'>Back to accounts</a>
</body>
</html>