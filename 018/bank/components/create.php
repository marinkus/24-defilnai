<?php

if (!file_exists(__DIR__ . '/data.json')){
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $name = $_POST['fname'] ?? 'No name';
    $surname = $_POST['surname'] ?? 'No surname';
    $iban = $_POST['iban'] ?? 'No IBAN';
    $personalcode = $_POST['personalcode'] ?? 'No ID';
    $funds = 0;

    $acc = [$name, $surname, $iban, $personalcode, $funds];

    $data = json_decode(file_get_contents(__DIR__ . '/data.json', 1));
    $data[] = $acc;

    file_put_contents(__DIR__ . '/data.json', json_encode($data));

    header("Location: http://localhost/defilnai/018/bank/components/create.php");
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create acc</title>
    <link rel="stylesheet" href="../styles/form.css">
</head>
<body>
    <h2>Create new bank account:</h2>
    <div class="form">
    <form action="http://localhost/defilnai/018/bank/components/create.php" method="post">
        <label for="fname">Name</label>
        <input type="text" name="fname" class="input">
        <label for="surname">Surname</label>
        <input type="text" name="surname" class="input">
        <label for="iban">IBAN number</label>
        <input type="text" name="iban" class="input">
        <label for="personalcode">Personal code</label>
        <input type="text" name="personalcode" class="input">
        <button type="submit">Create</button>
    </div>
    </form>
</body>
</html>