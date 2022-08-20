<?php

view('top');
?>

<h2>Welcome to "Sberbank</h2>

<a href="<?=URL ?>create" method='get' class="btn btn-primary">Create account</a>
<a href="<?=URL ?>accounts" method='get' class="btn btn-primary">Accounts list</a>


<?php
view('bottom');
?>