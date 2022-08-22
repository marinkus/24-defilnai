<?php

view('top');
?>

<h2>Welcome to „Sberbank“</h2>
<h3>Count of lives, that we are going to ruin: <?= Account::$usersCount?></h3>
<a href="<?=URL ?>create" method='get' class="btn btn-primary">Create account</a>
<a href="<?=URL ?>accounts" method='get' class="btn btn-primary">Accounts list</a>


<?php
view('bottom');
?>