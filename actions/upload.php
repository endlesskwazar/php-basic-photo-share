<?php
include '../helpers/guard.php';
?>
<?php

$title = htmlspecialchars($_POST['title']);
$author = htmlspecialchars($_POST['author']);

$generated_file_name = rand(0, 99999) . basename($_FILES['photo']['name']);
$target_path = '../uploads/' . $generated_file_name;

if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
    $dbFile = fopen("../db.txt", "a");
    fwrite($dbFile, $title . "||" . $author . "||" . $generated_file_name . PHP_EOL);
    fclose($dbFile);
    echo "File was uploaded " . "<a href='/'>got to index</a>";
} else {
    echo "Error while uploading photo";
}