<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require '../core/Database.php';
    

    $data = file_get_contents("php://input");
    $game = json_decode($data, true);

    if (isset($game['userid'], $game['gamepgn']) && $game['userid'] !== '' && $game['gamepgn'] !== '') {
        $db = new Database();

        $query = "INSERT INTO games (user_id, PGN) VALUES (:userid, :gamepgn)";

        $statement = $db->connection->prepare($query);

        $statement->bindParam(':userid', $game['userid']);
        $statement->bindParam(':gamepgn', $game['gamepgn']);

        $statement->execute();
    }
}

require('views/analysis.view.php');

