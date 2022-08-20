<?php
if (!file_exists(__DIR__ . '/../users.json')){
    file_put_contents(__DIR__ . '/../users.json', json_encode([]));
}
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    require(__DIR__ . '/../classes/Account.php');
    $name = $_POST['fname'] ?? 'No name';
    $surname = $_POST['surname'] ?? 'No surname';
    $iban = $_POST['iban'] ?? 'No IBAN';
    $personalcode = $_POST['personalcode'] ?? 'No ID';
    $funds = 0;
    
    $account = new Account($name, $surname, $personalcode, $iban, $funds);
    $users = json_decode(file_get_contents(__DIR__ . '/../users.json', 0));
    $users[] = $account;

    file_put_contents(__DIR__ . '/../users.json', json_encode($users));
}
view('top');

?>
<?php
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    ?> 
    <h2>Creation successful!</h2>

        <a href="<?=URL ?>create" method='get' class="btn btn-primary">Create another account</a>
        <a href="<?=URL ?>accounts" method='get' class="btn btn-primary">Accounts list</a>


    
    <?php
} else {
?>
<h2>Create new bank account:</h2>
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