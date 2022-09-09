<?php

App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Charge money</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>users/charge/<?= $user['id'] ?>" method="post">
                        <h2><?= $user['iban']  ?></h2>
                        <h3>Funds: <?= $user['funds']  ?> EUR </h3>
                        <label for="addFunds">Enter amount of money</label>
                        <input type="number" name='addFunds'>
                        <button type="submit" class="btn btn-primary mt-5">Charge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
App\App::view('bottom');
