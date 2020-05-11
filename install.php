<?php

include 'helpers/db.php';

if(file_exists('lock')) {
    echo 'cannot perform operation';
    die();
}

$conn = get_conn_to_server();

//create db

$conn->query('create database photo_sharing;');

//use

$conn->query('use photo_sharing;');

//create users

$conn->query('create table users (
	id integer primary key auto_increment,
    login varchar(12) not null,
    password varchar(255) not null
);');

// TODO: create category table



//create photos
// TODO: add fk to photos
$conn->query('create table photos (
	id integer primary key auto_increment,
    title varchar(200) not null,
    src varchar(800) not null,
    user_id integer not null,
    foreign key(user_id) references users(id)
);');

// TODO: insert test data to categoryies

//insert test users
$pass = password_hash('secret', PASSWORD_DEFAULT);
$conn->query("insert into users(login, password) values('test', '" . $pass . "');");

$file = fopen('lock', 'w');
fclose($file);