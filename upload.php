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
    <label for="title">Category:</label>
    
    <select name="category">
    <!-- Iterate over table categories. Display option with value as category id -->
    
        <option value="1">Movie</option>
        <option value="2">Nature</option>
    </select>
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