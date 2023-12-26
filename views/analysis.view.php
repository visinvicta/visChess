<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>
<div class="content">
    <div class="main">
        <div class="header">
            <h1>Analysis</h1>
        </div>

        <div class="chessboard">
            <div id="analysisboard" style="width: 596px"></div>
            <div class="scrollbuttoncontainer">
                <button id="leftscroll" class="chessbutton leftscroll"><-</button><button id="rightscroll" class="chessbutton rightscroll">-></button>
            </div>
            <label>Status:</label>
            <div class="statuscontainer" id="status"></div>
            <label>FEN:</label>
            <div class="fencontainer" id="fen"></div>
            <label>PGN:</label>
            <textarea class="boardgamepgn pgncontainer importpgn" id="importpgn" type="text"></textarea><br>
            <div class="actionbuttoncontainer">
                <button class="chessbutton importpgnsubmit" id="importpgnsubmit">Import PGN</button>
                <button class="chessbutton posttodb" id="posttodb">Add to Database</button>
            </div>
        </div>

        <?php if (isset($errors['body'])) : ?>
            <p> <?= $errors['body'] ?></p>
        <?php endif; ?>

    </div>
</div>

<script src="./js/boardconfiganalysis.js"></script>

<?php require base_path('views/partials/footer.php'); ?>