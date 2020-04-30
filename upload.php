<?php
include 'helpers/guard.php';
?>
<?php
    include 'templates/head.php' 
?>

<h1>Upload new photo</h1>

<form action="actions/upload.php" method="POST" enctype="multipart/form-data">

<div>
    <label for="title">Title:</label>
    <input type="text" name="title">
</div>

<div>
    <label for="author">Author:</label>
    <input type="text" name="author">
</div>

<div>
    <label for="photo">Photo:</label>
    <input type="file" name="photo">
</div>

<div>
<input type="submit">

</div>
</form>

<?php
    include 'templates/footer.php' 
?>  