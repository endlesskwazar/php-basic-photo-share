<?php

session_start();

include_once 'db.php';

function find_by_login_and_password($login, $password) {
    
    $conn = get_conn_to_db();
    //TODO: replase statement with prepared statement
    $result = $conn->query("select * from users where login = '" .$login ."';");

    while($row = mysqli_fetch_assoc($result)) {
       if($row['login'] == $login && password_verify($password, $row['password'])) {
           return [
               'id' => $row['id'],
               'login' => $row['login']
           ];
       }
    }

    mysqli_close($conn);

    return null;
}

function login($id, $login) {
    $_SESSION['user'] = $login;
    $_SESSION['id'] = $id;
}

function get_logged_user() {
    if(isset($_SESSION['user'])) {
        return [
            'id' => $_SESSION['id'],
            'login' => $_SESSION['user']
        ];
    }

    return "Anonimus";
}

function logout() {
    $_SESSION['user'] = null;
    $_SESSION['id'] = null;
}