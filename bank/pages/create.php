<?php
if (!file_exists(__DIR__ . '/../data.json')){
    file_put_contents(__DIR__ . '/../data.json', json_encode([]));
}
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $name = $_POST['fname'] ?? 'No name';
    $surname = $_POST['surname'] ?? 'No surname';
    $iban = $_POST['iban'] ?? 'No IBAN';
    $personalcode = $_POST['personalcode'] ?? 'No ID';
    $funds = 0;
    require(__DIR__ . '/../classes/Account.php');

    $account1 = new Account($name, $surname, $personalcode, $iban, $funds);
    $data = json_decode(file_get_contents(__DIR__ . '/../data.json', 1));
    $data[] = $account1;

    file_put_contents(__DIR__ . '/../data.json', json_encode($data));
}
view('top');

?>
<h2>Create new bank account:</h2>
    <div class="form">
    <form action="<?= URL . 'create' ?>" method="post">
        <label for="fname">Name</label>
        <input type="text" name="fname" class="input">
        <label for="surname">Surname</label>
        <input type="text" name="surname" class="input">
        <label for="iban">IBAN number</label>
        <input type="text" name="iban" class="input">
        <label for="personalcode">Personal code</label>
        <input type="text" name="personalcode" class="input">
        <button type="submit">Create</button>
    </form>
    </div>
<?php
view('bottom');
?>