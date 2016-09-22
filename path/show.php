<?php
    $db = new SQLite3('../database.db');

    $id = $_GET['id'];
    //Search path by id
    $query = $db->query("SELECT * FROM paths WHERE Id=$id");
    $path = $query->fetchArray();
?>
<?php include '../header.php'; ?>
<a href="/">Back to path list</a>
<p><?php echo $path['name']; ?>
<?php include '../footer.php'; ?>
