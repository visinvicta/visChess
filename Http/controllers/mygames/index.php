<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$result = $db->query('SELECT * FROM mygames WHERE user_id = :userid', [
    'userid' => $_SESSION['user']['id']['id']
]);

$games = $result->get();

view('mygames/index.view.php', [
    'games' => $games
]);