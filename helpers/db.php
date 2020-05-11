<?php

function get_conn_to_server() {
    // localhost
    return new mysqli('127.0.0.1', 'root', '1111');
}

function get_conn_to_db() {
    // localhost
    return new mysqli('127.0.0.1', 'root', '1111', 'photo_sharing');
}