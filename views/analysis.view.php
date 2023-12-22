<?php require('views/partials/head.php');?>
<?php require('views/partials/banner.php'); ?>

<div class="content">
    <div class="main">
        <div class="header">
        <h1>Analysis</h1>
        </div>

        <div class="chessboard">
        <div id="analysisboard" style="width: 600px"></div>
        <label>Status:</label>
        <div id="status"></div>
        <label>FEN:</label>
        <div id="fen"></div>
        <label>PGN:</label>
        <div id="pgn"></div>
    
        <input class="importpgn" id="importpgn" type="text">
        <button class="importpgnsubmit" id="importpgnsubmit">Import PGN</button>
        <button class="posttodb" id="posttodb">Add to database</button>
        </div>

    </div>
</div>

<script src="./js/boardconfiganalysis.js"></script>

<?php require('views/partials/footer.php');?>