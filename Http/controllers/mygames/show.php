<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$game = $db->query('SELECT * FROM mygames WHERE id = :id', [
    'id' => $_GET['id']
    ])->findOrFail();

$currentUserId = 1;

authorize($game['user_id'] == $currentUserId);

if ($game) {
    $pgn = $game['PGN'];
}

view ('mygames/show.view.php', [
    'game' => $game
]);


