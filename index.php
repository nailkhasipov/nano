<?php
    $db = new SQLite3('database.db');

    $paths = $db->query('SELECT * FROM paths') or die("Query failed");
?>
<?php include 'header.php'; ?>
<p>Welcome to memo!</p>
<a href="/path/new.php">Create new path</a>
<ul><?php while ($path = $paths->fetchArray()){ echo "<li><a href='/path/show.php?id={$path['id']}'>{$path['name']}</a></li>";}?></ul>
<?php include 'footer.php'; ?>
