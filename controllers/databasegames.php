<?php

require 'core/Database.php';

$db = new Database();
$query = "select * from games";

$statement = $db->connection->prepare($query);
$statement->execute();
$games = $statement->fetchall();

require('views/databasegames.view.php');

