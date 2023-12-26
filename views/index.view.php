<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<div class="content">
    <div class="main">
        <div class="header">
            <h1>Home</h1>
        </div>

        <div class="chessboard">
            <div id="myBoard" style="width: 596px"></div>
            <label>Status:</label>
            <div class="statuscontainer" id="status"></div>
            <label>FEN:</label>
            <div class="fencontainer" id="fen"></div>
            <label>PGN:</label>
            <div class="importpgn pgncontainer" id="pgn" type="text"></div>
        </div>




    </div>
</div>
<script src="./js/boardconfig.js"></script>
<?php require base_path('views/partials/footer.php'); ?>