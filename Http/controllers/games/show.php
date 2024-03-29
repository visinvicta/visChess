<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$game = $db->query('SELECT * FROM games WHERE id = :id', [
    'id' => $_GET['id']
    ])->findOrFail();


if ($game) {
    $pgn = $game['PGN'];
}

view ('games/show.view.php', [
    'game' => $game
]);


