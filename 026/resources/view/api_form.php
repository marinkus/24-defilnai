<?php

App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Distance between:</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>api/go" method="post">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" class="form-control" name="from">
                    </div>
                    <div class="form-group">
                        <label>Where</label>
                        <input type="text" class="form-control" name="where">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Travel</button>
                    </form>
                    <?php if($result) : ?>
                    <div class="result">
                        From <a href="<?= $result['from_link'] ?>" target="blank"><?= $result['from'] ?> </a> to <a href="<?= $result['where_link'] ?>" target="blank"><?= $result['where'] ?></a> is <?= $result['distance'] ?> km.
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
App\App::view('bottom');
