<?php

include '../helpers/users.php';

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);

$user = find_by_login_and_password($login, $password);

if($user) {
    login($user['id'], $user['login']);
    header("Location: /");
} else {
    echo 'login or password wrong';
}