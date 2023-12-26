<?php

require __DIR__ . '/../core/Database.php';
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);

$db->query("select * from games");
$games = $db->get();

require('views/databasegames.view.php');

