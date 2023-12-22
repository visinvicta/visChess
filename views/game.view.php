<?php require('views/partials/head.php');?>
<?php require('views/partials/banner.php'); ?>

<div class="content">
    <div class="main">
        <div class="header">
        <h1>Game</h1>
        </div>

        <div class="chessboard">
        <div id="analysisboard" style="width: 600px"></div>
        <label>Status:</label>
        <div id="status"></div>
        <label>FEN:</label>
        <div id="fen"></div>
        <label>PGN:</label>
        <div class="gamepgn"><?= $game['PGN'] ?></div>
    
        
    </div>
</div>

<script src="./js/boardconfiggame.js"></script>


<?php require('views/partials/footer.php');?>