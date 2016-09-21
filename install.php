<?php
    $db = new SQLite3('database.db');

    //drop the table if already exists
    $db->exec('DROP TABLE IF EXISTS paths');

    //Create a basic table
    $db->exec('CREATE TABLE paths (name varchar(255))');
    echo "Table paths has been created \n";
?>
