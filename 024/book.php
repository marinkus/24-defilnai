<?php

// require __DIR__ . '/01/Title.php';
// require __DIR__ . '/01/Read.php';
// require __DIR__ . '/02/Read.php';
spl_autoload_register(function ($class) {
    $prefix = 'Petro\\';
    $base_dir = __DIR__ . '/01/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
spl_autoload_register(function ($class) {
    $prefix = 'Zigmo\\';
    $base_dir = __DIR__ . '/02/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
spl_autoload_register(function ($class) {
    $prefix = '';
    $base_dir = __DIR__ . '/01/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$book1 = new Petro\Read;
$book2 = new Zigmo\Read;

echo $book1->funBook();
echo '<br>';
echo $book2->sadBook();