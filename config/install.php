<?php 
require_once('connection.php');


// $connection = new PDO($con,$database_user,$database_pass);

$sql =" CREATE TABLE  article (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title VARCHAR(30) NOT NULL,
    text TEXT NOT NULL,
    date DATETIME NOT NULL
);";

// $connection->exec($sql); // Execute
echo " you are now connected";
?>