<?php
require 'core/Database.php';




$db = new Database();
$game = $db->query('SELECT * FROM games WHERE id = :id', [
    'id' => $_GET['id']
    
    ])->fetch();

$currentUserId = 1;


if (! $game) {
    abort();
}    

if ($game['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

if ($game) {
    $pgn = $game['PGN'];
}

require('views/game.view.php');


