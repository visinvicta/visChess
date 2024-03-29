<?php require __DIR__ . '/../partials/head.php'; ?>
<?php require __DIR__ . '/../partials/banner.php'; ?>

<div class="content">
    <div class="main">
        <div class="header">
        <h1>My Game</h1>
        </div>

        <div class="chessboard">
            <div id="analysisboard" style="width: 596px"></div>
            <div class="scrollbuttoncontainer">
                <button id="leftscroll" class="chessbutton leftscroll"><-</button>
                <button id="rightscroll" class="chessbutton rightscroll">-></button>
                <button id="flipboard" class="chessbutton flipboard">Flip</button>
            </div>
            <label>Status:</label>
            <div class="statuscontainer" id="status"></div>
            <label>FEN:</label>
            <div class="fencontainer" id="fen"></div>
            <label>PGN:</label>
            <div class="boardgamepgn pgncontainer importpgn test"><?= $game['PGN'] ?></div>

            <div>
                <form method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $game['id'] ?>">
                    <button class="deletebutton chessbutton">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="./js/boardconfiggame.js"></script>


<?php require __DIR__ . '/../partials/footer.php'; ?>