<?php
    include 'helpers/users.php' 
?>
<?php
    include 'templates/head.php' 
?>
<?php
include 'helpers/photos.php';
?>

<h1>Photo share app</h1>

<?php
$user = get_logged_user();

if(is_array($user)) {
    $user = get_logged_user()['login'];
}

echo "Hello, " . $user;

if($user != "Anonimus") {
    echo "<a href='logout.php'>Logout</a>";
}
?>

<a href="upload.php">Upload new photo</a>

<hr>

<div id="photo_wrapper">

<?php

$list = get_all_photos();

if(!$list) {
    echo 'There are no photos';
} else {
    foreach($list as $photo) {
        echo <<<EOD
        <div class="phto_item">
            <img class="photo" src="uploads/$photo[src]" />
            <div>
                Title: <b>$photo[title]</b>
            </div>
            <div>
                Author: <span>$photo[author]</span>
            </div>
        </div>
EOD;
    }
}

?>

</div>

<?php
    include 'templates/footer.php' 
?>  
