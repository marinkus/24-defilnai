<?php

$users = json_decode(file_get_contents(__DIR__ . '/../users.json', 1), true);
?>
<?php
view('top');
?>

<h2>Accounts list:</h2>
    <ul class="list-group">
    <?php foreach(json_decode(file_get_contents(__DIR__ . '/../users.json', 1)) as $user) : ?>
        <li class="list-group-item">Name, surname: <?=$user->name . ' ' . $user->surname?> ID: <?=$user->id?> IBAN: <?= $user->iban?>  Balance: <?=$user->funds?>
        <a class="btn btn-primary" class="btn btn-primary" href="<?=URL?>addFunds?id=<?=$user->id?>">Add funds</a>
        </li>
    <?php endforeach ?>
    </ul>


<?php
view('bottom');
?>