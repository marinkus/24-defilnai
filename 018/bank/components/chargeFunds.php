<?php

if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $iban = $_GET['iban'] ?? '';
}

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $funds = $_POST['funds'];
    $ibanNumber = $_POST['iban'];
    $data = json_decode(file_get_contents(__DIR__ . '/data.json', 1), true);
    foreach ($data as &$account) {
        if (in_array($ibanNumber, $account)) {
            validationNegative($account[4], $funds);
        }
    }
    file_put_contents(__DIR__ . '/data.json', json_encode($data));
    $iban = '';
}

function validationNegative(&$balance, $chargeValue) {
    if (($balance - $chargeValue) >= 0) {
        $balance -= $chargeValue;
        header('Location: http://localhost/defilnai/018/bank/components/chargedSuccessful.php');
    } else {
        header('Location: http://localhost/defilnai/018/bank/components/negativeBalance.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <label for="accounts">Enter amount:</label>    
        <form name="accounts" method="post">
            <h2>Charge Funds</h2>
            <input name="funds" type="number">
            <input name="iban" type="text" value="<?=$iban?>" readonly>
            <input type="submit" value="Submit">
</form>
    </div>
</body>
</html>