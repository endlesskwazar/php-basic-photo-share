<?php
    include 'templates/head.php' 
?>

<form action="actions/login.php" method="POST">

<div>
<label for="login">Login:</label>
<input type="text" name="login">
</div>


<div>
<label for="password">Password:</label>
<input type="password" name="password">
</div>

<input type="submit">
</form>

<?php
    include 'templates/footer.php' 
?> 