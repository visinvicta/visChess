<body>

    <div class="container">
        <nav class="nav" id="test">
            <a class="navOptions" href="/">Home</a>
            <a class="navOptions" href="mygames">My Games</a>
            <a class="navOptions" href="games">Database</a>
            <a class="navOptions" href="analysis">Analysis</a>
            <a class="navOptions" href="about">About</a>
            <div class="register">
                <?php if ($_SESSION['user'] ?? false) : ?>

                    <div class="login">
                        <form method="POST" action="/session">
                            <input type="hidden" name="_method" value="DELETE" />

                            <button class="logout">Log Out</button>
                        </form>
                    </div>
                <?php else : ?>

                    <a class="navOptions login register" href=register>Register</a>
                    <a class="navOptions login" href=login>Login</a>
            </div>
        <?php endif; ?>
        </nav>