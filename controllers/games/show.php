<?php

require __DIR__ . '/../../core/Database.php';
$config = require __DIR__ . '/../../config.php';
$db = new Database($config['database']);

$game = $db->query('SELECT * FROM games WHERE id = :id', [
    'id' => $_GET['id']
    
    ])->findOrFail();

$currentUserId = 1;


authorize($game['user_id'] == $currentUserId);

if ($game) {
    $pgn = $game['PGN'];
}

view ('games/show.view.php', [
    'game' => $game
]);


