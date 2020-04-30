<?php
    include 'helpers/users.php' 
?>
<?php
    include 'templates/head.php' 
?>

<h1>Photo share app</h1>

<?php
echo "Hello, " . get_logged_user();

if(get_logged_user() != "Anonimus") {
    echo "<a href='logout.php'>Logout</a>";
}
?>

<a href="upload.php">Upload new photo</a>

<hr>

<div id="photo_wrapper">

<?php

$dbFile = fopen("db.txt", "r");

while(!feof($dbFile)) {

    $item = trim(fgets($dbFile));

    if ($item == "") {
        break;
    }

    $item = explode("||", $item);

    echo <<<EOD
    <div class="phto_item">
        <img class="photo" src="uploads/$item[2]" />
        <div>
            Title: <b>$item[0]</b>
        </div>
        <div>
            Author: <span>$item[1]</span>
        </div>
    </div>
    EOD;


}

fclose($dbFile);

?>

</div>

<?php
    include 'templates/footer.php' 
?>  
