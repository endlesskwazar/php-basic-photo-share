<?php

session_start();

function find_by_login_and_password($login, $password) {
    $userDb = fopen('../users.txt', 'r');

    while(!feof($userDb)) {
        $line = fgets($userDb);
        $user = explode("||", $line);
        if($user[0] == $login) {
            if($user[1] == $password) {
                return $user;
            }
        }
    }

    fclose($userDb);

    return null;
}

function login($login) {
    $_SESSION['user'] = $login;
}

function get_logged_user() {
    if(isset($_SESSION['user'])) {
        return $_SESSION['user'];
    }

    return "Anonimus";
}

function logout() {
    $_SESSION['user'] = null;
}