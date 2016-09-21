<?php
    $db = new SQLite3('../database.db');

    $name = $_POST['name'];
    //insert rows
    $db->exec("INSERT INTO paths (name) VALUES ('$name')");

    header('Location: /index.php');
?>
