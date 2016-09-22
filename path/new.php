<?php include '../header.php'; ?>
Create new path<br>
<form method="post" action="/path/create.php">
    <label for="name">Path name:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Submit">
</form>
<?php include '../footer.php'; ?>
