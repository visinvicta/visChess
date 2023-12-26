<?php
require __DIR__ . '/../core/Validator.php';
require __DIR__ . '/../core/Database.php';
$config = require __DIR__ . '/../config.php';
$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . '/../functions.php';
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

