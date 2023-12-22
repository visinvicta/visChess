<?php require('views/partials/head.php'); ?>
<?php require('views/partials/banner.php'); ?>

<div class="content">
    <div class="main">
        <div class="header">
            <h1>Database</h1>
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

                                    <a href="/game?id=<?= $game['id'] ?>" class="analysisbutton">Open in analysisboard</a>
                                    <a href="/game?id=<?= $game['id'] ?>" class="mygamesbutton">Add to My Games</a>
                                    <a href="/game?id=<?= $game['id'] ?>" class="deletebutton">Delete</a>

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
<!-- <?php require('views/partials/footer.php'); ?> -->