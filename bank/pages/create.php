<?php
if (!file_exists(__DIR__ . '/../users.json')){
    file_put_contents(__DIR__ . '/../users.json', json_encode([]));
}
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $name = $_POST['fname'] ?? 'No name';
    if (!preg_match("/^([a-zA-Z' ]+)$/", $name)) {
        view('error');
        die;
    }
    $surname = $_POST['surname'] ?? 'No surname';
    if (!preg_match("/^([a-zA-Z' ]+)$/", $surname)) {
        view('error');
        die;
    }
    $iban = $_POST['iban'] ?? 'No IBAN';
    $personalcode = $_POST['personalcode'] ?? 'No ID';
    if (strlen($personalcode) != 11) {
        view('error');
        die;
    }
    $funds = 0;
    $users = json_decode(file_get_contents(__DIR__ . '/../users.json', 0));
    // Validation for duplicates
    foreach ($users as &$user) {
        if ($user->id == $personalcode) {
            view('error');
            die;
        }
        if ($user->iban == $iban) {
            view('error');
            die;
        }
    }

    $account = new Account($name, $surname, $personalcode, $iban, $funds);
    $users[] = $account;

    file_put_contents(__DIR__ . '/../users.json', json_encode($users));
}
view('top');

?>
<?php
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    ?>
    <h2>Sberbank</h2>
    <h3>Creation successful!</h3>

        <a href="<?=URL ?>create" method='get' class="btn btn-primary">Create another account</a>
        <a href="<?=URL ?>accounts" method='get' class="btn btn-primary">Accounts list</a>


    
    <?php
} else {
?>
<h2>Sberbank</h2>
<h3>Create new bank account:</h3>
<form action="<?= URL ?>create" method="POST">
    <div class="mb-3" style="width: 500px">
        <label class='form-label' for="fname">Name</label>
        <input type="text" class="form-control" name="fname" class="input">
    </div>
    <div class="mb-3" style="width: 500px">
        <label class='form-label' for="surname">Surname</label>
        <input type="text" class="form-control" name="surname" class="input">
    </div>
    <div class="mb-3" style="width: 500px">
        <label class='form-label' for="iban">IBAN number</label>
        <input type="text" class="form-control" name="iban" class="input">
    </div>
    <div class="mb-3" style="width: 500px">
    <label class='form-label' for="personalcode">Personal code</label>
    <input type="number" class="form-control" name="personalcode" class="input">
    </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
<?php
}
view('bottom');
?>