<body>

    <div class="container">
        <nav class="nav" id="test">
            <a class="navOptions" href="/">Home</a>
            <a class="navOptions" href="mygames">My Games</a>
            <a class="navOptions" href="games">Database</a>
            <a class="navOptions" href="analysis">Analysis</a>
            <a class="navOptions" href="about">About</a>

            <?php if ($_SESSION['user'] ?? false) : ?>
                <a class="navOptions login" href=>Welcome</a>
            <?php else : ?>
                <a class="navOptions login" href=register>Register</a>
            <?php endif; ?>
        </nav>