<?php
include '../helpers/guard.php';
include_once '../helpers/db.php';
include_once '../helpers/users.php';
?>
<?php

$title = htmlspecialchars($_POST['title']);

$generated_file_name = rand(0, 99999) . basename($_FILES['photo']['name']);
$target_path = '../uploads/' . $generated_file_name;

if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
    $conn = get_conn_to_db();
    $statement = $conn->prepare('insert into photos(title, src, user_id) values(?, ?, ?);');
    $statement->bind_param("ssi", $title, $target_path, get_logged_user()['id']);
    $statement->execute();
    $statement->close();
    echo "File was uploaded " . "<a href='/'>got to index</a>";
} else {
    echo "Error while uploading photo";
}