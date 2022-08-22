<?php

$users = json_decode(file_get_contents(__DIR__ . '/../users.json', 1), true);
?>
<?php
view('top');
?>

<h2>Sberbank</h2>
<h3>Accounts list:</h2>
    <ul class="list-group">
    <?php foreach(json_decode(file_get_contents(__DIR__ . '/../users.json', 1)) as $user) : ?>
        <li class="list-group-item">Name: <?=$user->name . ' ' . $user->surname?> ID: <?=$user->id?> Balance: <?=$user->funds?> rupies.
        <a class="btn btn-primary"href="<?=URL?>addFunds?id=<?=$user->id?>">Add funds</a>
        <a class="btn btn-secondary" href="<?=URL?>chargeFunds?id=<?=$user->id?>">Charge funds</a>
        </li>
    <?php endforeach ?>
    </ul>
    <a href="<?=URL ?>home" method='get' class="btn btn-primary">Home</a>


<?php
view('bottom');
?>