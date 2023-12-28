<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    $data = file_get_contents("php://input");
    $game = json_decode($data, true);

    if (! Validator::string($game['gamepgn'], 1, 1500)) {
        $errors['body'] = 'A body of no more than 1500 characters is required.';
        die();
    }
    
    if (empty($errors)) {
            $db->query('INSERT INTO games (user_id, PGN) VALUES (:userid, :gamepgn)', [
            'userid' => $game['userid'],
            'gamepgn' => $game['gamepgn'],            
        ]);
    }
}

view('analysis.view.php');

