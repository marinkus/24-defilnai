<?php

App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>New User</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>users/store" method="post">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" name="fname">
                        <small class="form-text text-muted">First name</small>
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="sname">
                        <small class="form-text text-muted">Last name</small>
                    </div>
                    <div class="form-group">
                        <label>ID number</label>
                        <input type="number" class="form-control" name="idnumber">
                        <small class="form-text text-muted">Your ID number</small>
                    </div>
                    <div class="form-group">
                        <label>IBAN number</label>
                        <input type="text" class="form-control" name="iban">
                        <small class="form-text text-muted">IBAN</small>
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