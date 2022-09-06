<?php

App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Users list:</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($users as $user) : ?>
                            <li class="list-group-item">
                                <div class="line">
                                    <div class="line__content">
                                        <div class="line__content__name">
                                            <?= $user['fname']  ?>
                                            <?= $user['sname']  ?>
                                        </div>
                                        <div class="line__content__idnumber">
                                        <?= $user['idnumber'] ?>
                                        </div>
                                        <div class="line__content__iban">
                                        <?= $user['iban'] ?>
                                        </div>

                                    </div>
                                    <div class="line__buttons">
                                    <a href="<?= URL . 'users/edit/'. $user['id']?>" type="button" class="btn btn-outline-success m-2">Edit</a>
                                    <form action="<?= URL . 'users/delete/'. $user['id']?>" method="post">
                                    <button type="submit" class="btn btn-outline-danger m-2">Delete</button>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
App\App::view('bottom');

