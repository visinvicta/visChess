<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id']['id'];

$game = $db->query('SELECT * FROM games WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($game['user_id'] === $currentUserId);

$db->query('DELETE FROM games WHERE id = :id', [
    'id' => $_POST['id']
]);

header('location: /games');
exit();