<?php
    $db = new SQLite3('database.db');

    //drop the table if already exists
    $db->exec('DROP TABLE IF EXISTS paths');

    $db->exec('CREATE TABLE paths (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name varchar(255) NOT NULL)');
    echo "Table paths has been created \n";
?>
