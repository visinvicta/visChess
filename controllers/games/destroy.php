<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$currentUserId = 1;

$game = $db->query('select * from games where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($game['user_id'] === $currentUserId);

$db->query('delete from games where id = :id', [
    'id' => $_POST['id']
]);

header('location: /games');
exit();