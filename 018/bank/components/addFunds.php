<?php

$data = json_decode(file_get_contents(__DIR__ . '/data.json', 1), true);
$data[]=$acc;

if(isset($_POST)) 

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
    <h2>Add funds</h2>
    <div class="form">
    <label for="accounts">Select account:</label>
        
<select name="accounts">
<?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json', 1)) as $account) : ?>
                <option><?= $account[0] ?> <?= $account[1] ?></option>
            <?php endforeach ?>
            <input type="number" method="post">
            <input type="submit" value="Submit">
</select>
    </div>
</body>
</html>