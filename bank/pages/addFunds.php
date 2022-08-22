<?php
if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $id = $_GET['id'] ?? '';
}

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $funds = $_POST['funds'];
    $users = json_decode(file_get_contents(__DIR__ . '/../users.json', 1), true);
    foreach ($users as &$user) {
        if ($id == $user->id) {
            $user->id += $funds;
        }
    }
    file_put_contents(__DIR__ . '/../users.json', json_encode($users));
    $id = '';
}
view('top');
?>

<h2>Welcome to "Sberbank</h2>
    <div class="form">
        <label for="accounts">Enter amount:</label>    
        <form name="accounts" method="post">
            <h2>Add funds</h2>
            <input name="funds" type="number">
            <input name="id" type="text" value="<?=$id?>" readonly>
            <input type="submit" value="Submit">
        </form>
    </div>
<?php
view('bottom');
?>