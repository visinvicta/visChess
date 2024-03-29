<?php require __DIR__ . '/../partials/head.php'; ?>
<?php require __DIR__ . '/../partials/banner.php'; ?>

<div class="content">
    <div class="main">
        <div class="header">
            <h1>My Games</h1>
        </div>


        <div class="dbgames">
            <table>
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($games as $game) : ?>

                        <div class="gamecontainer">
                            <div class="gameboard" id="gameboard-<?= $game['id'] ?>"></div>
                            <div class="gameinfocontainer">
                                <div class="gameusername"><?= $game['user_id'] ?></div>
                                <div class="gamepgn"><?= $game['PGN'] ?></div>
                                <div class="buttoncontainer">


                                    <form action="/mygame" method="GET">
                                        <input type="hidden" name="id" value="<?= $game['id'] ?>">
                                        <input type="submit" class="chessbutton analysisbutton" value="Open in analysisboard">
                                    </form>

                                    <form action="/mygame" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $game['id'] ?>">
                                        <input type="submit" class="chessbutton deletebutton" value="Delete">
                                    </form>

                                    
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </div>
</div>

<script src="./js/boardconfigdbgames.js"></script>
<!-- <script src="./js/boardconfiganalysis.js"></script> -->
<!-- <?php require __DIR__ . '/../partials/footer.php'; ?> -->