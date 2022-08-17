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
            $account[4] += $funds;
        }
    }
    file_put_contents(__DIR__ . '/data.json', json_encode($data));
    $iban = '';
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
            <h2>Add funds</h2>
            <input name="funds" type="number">
            <input name="iban" type="text" value="<?=$iban?>" readonly autocomplete="off">
            <input type="submit" value="Submit">
</form>
    </div>
</body>
</html>