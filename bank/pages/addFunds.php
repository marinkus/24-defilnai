<?php
if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $id = $_GET['id'] ?? '';
}


view('top');
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    ?> 
    <h2>Funds added successful!</h2>

        <a href="<?=URL ?>home" method='get' class="btn btn-primary">Home</a>
        <a href="<?=URL ?>accounts" method='get' class="btn btn-primary">Accounts list</a>

    <?php
    die;
} else {
?>

<h2>"Sberbank</h2>
    <div class="form">
        <h2>Add funds</h2>
        <label for="accounts">Enter amount:</label>    
        <form name="accounts" method="post">
            <input name="funds" type="number">
            <input name="id" type="text" value="<?=$id?>" readonly>
            <input type="submit" value="Submit">
        </form>
    </div>
<?php
view('bottom');
}
?>