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

        <a href="<?=URL ?>create" method='get'>Create another account</a>
        <a href="<?=URL ?>accounts" method='get'>Accounts list</a>


    
    <?php
} else {
?>
<h2>Create new bank account:</h2>
    <div class="form">
    <form action="<?= URL ?>create" method="POST">
        <label for="fname">Name</label>
        <input type="text" name="fname" class="input">
        <label for="surname">Surname</label>
        <input type="text" name="surname" class="input">
        <label for="iban">IBAN number</label>
        <input type="text" name="iban" class="input">
        <label for="personalcode">Personal code</label>
        <input type="number" name="personalcode" class="input">
        <button type="submit">Create</button>
    </form>
    </div>
<?php
}
view('bottom');
?>