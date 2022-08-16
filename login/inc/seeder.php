<?php


$users = [
    ['name' => 'asilas',
    'password' => md5('123'),
    'color' => 'pink'],
    ['name' => 'briedis',
    'password' => md5('123'),
    'color' => 'magenta'],
    ['name' => 'barsukas',
    'password' => md5('123'),
    'color' => 'black'],
];

file_put_contents('users.json', json_encode($users));