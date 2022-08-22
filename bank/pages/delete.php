<?php
if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $id = $_GET['id'] ?? '';
}
view('top');
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    ?> 
    <h2>Account deleted!</h2>

        <a href="<?=URL ?>home" method='get' class="btn btn-primary">Home</a>
        <a href="<?=URL ?>accounts" method='get' class="btn btn-primary">Accounts list</a>

        <?php
    die;
} else {
?>

<h2>Sberbank</h2>
<h3>Are you sure want to delete account?</h3>
    <form name="delete" method="post">
            <label for="id">ID:</label>
            <input name="id" type="text" value="<?=$id?>" readonly>
            <button type='submit' class="btn btn-primary">Yes</button>
            <a href="<?=URL?>home" class="btn btn-secondary">No</a>
        </form>


<?php
view('bottom');
}
?>