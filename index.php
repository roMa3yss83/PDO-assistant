<?php

use Database\DB;

include_once 'Database/DB.php';

$database = new DB();

$email = 'test@test.com';
$password = 'fsdf#434fd';

$database->query(
    'INSERT INTO users(email, password) VALUES(:email, :password)',
    [
        ':email' => $email,
        ':password' => $password
    ]);

print_r($database->query(
    'SELECT email, password FROM users WHERE email = "test@test.com"'));

?>