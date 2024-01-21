<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$db->query('SELECT * FROM games');
$games = $db->get();

view('games/index.view.php', [
    'games' => $games
]);

