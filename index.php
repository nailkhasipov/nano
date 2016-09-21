<?php
    $db = new SQLite3('database.db');

    $paths = $db->query('SELECT * FROM paths') or die("Query failed");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Memo</title>
</head>
<body>
    Welcome to memo!
    <a href="/path/new.php">Create new path</a>
    <ul><?php while ($path = $paths->fetchArray()){ echo "<li>{$path['name']}</li>";}?></ul>
</body>
</html>
