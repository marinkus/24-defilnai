<?php

$users = json_decode(file_get_contents(__DIR__ . '/../users.json', 1), true);
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $funds = $_POST['funds'];
    $users = json_decode(file_get_contents(__DIR__ . '/../users.json', 1));
    foreach ($users as &$user) {
        $user->funds += $funds;
        }
        file_put_contents(__DIR__ . '/../users.json', json_encode($users));
    }
?>
<?php
view('top');
?>

<h2>Accounts list:</h2>
    <ul class="list-group">
    <?php foreach(json_decode(file_get_contents(__DIR__ . '/../users.json', 1)) as $user) : ?>
        <li class="list-group-item">Name, surname: <?=$user->name . ' ' . $user->surname?>ID: <?=$user->id?> IBAN: <?= $user->iban?>    
        <div>Balance: <?=$user->funds?>
        <form action="<?=URL?>accounts" method='post'>
        <input type="number" name=funds>
        <button type='submit' class="btn btn-primary" href="<?=URL?>addFunds">Add/charge funds</button>
        </form>
    </div>
        </li>
    <?php endforeach ?>
    </ul>


<?php
view('bottom');
?>