<?php

App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Edit bank account</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>users/update/<?= $user['id'] ?>" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="fname" value="<?= $user['fname']  ?>">
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control" name="sname" value="<?= $user['sname']  ?>">
                    </div>
                    <div class="form-group">
                        <label>IBAN number</label>
                        <input type="text" class="form-control" name="iban" value="<?= $user['iban'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Personal code</label>
                        <input type="text" class="form-control" name="idnumber" value="<?= $user['idnumber'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
App\App::view('bottom');