<?php

include_once 'db.php';

function get_all_photos() {
    $conn = get_conn_to_db();
    // TODO: modify query add join with category
    $result = $conn->query('select u.login as author, p.title, p.src from users as u join photos as p on p.user_id = u.id;');
    $list = array();

    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }

    mysqli_close($conn);
    return $list;
}