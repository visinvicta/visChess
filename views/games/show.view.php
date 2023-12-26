<?php require __DIR__ . '/../partials/head.php'; ?>
<?php require __DIR__ . '/../partials/banner.php'; ?>

<div class="content">
    <div class="main">
        <div class="header">
        <h1>Game</h1>
        </div>

        <div class="chessboard">
            <div id="analysisboard" style="width: 596px"></div>
            <label>Status:</label>
            <div class="statuscontainer" id="status"></div>
            <label>FEN:</label>
            <div class="fencontainer" id="fen"></div>
            <label>PGN:</label>
            <div class="boardgamepgn pgncontainer importpgn test"><?= $game['PGN'] ?></div>
        </div>
    </div>
</div>

<script src="./js/boardconfiggame.js"></script>


<?php require __DIR__ . '/../partials/footer.php'; ?>