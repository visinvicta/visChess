<body>

    <div class="container">
        <nav class="nav" id="test">
            <a class="navOptions" href="/">Home</a>
            <a class="navOptions" href="mygames">My Games</a>
            <a class="navOptions" href="games">Database</a>
            <a class="navOptions" href="analysis">Analysis</a>
            <a class="navOptions" href="about">About</a>

            <?php if ($_SESSION['user'] ?? false) : ?>
                <a class="navOptions" href="about"><?="Welcome, " . $_SESSION['user']['name']['username']?></a>
                <div class="navOptions login">
                            <form method="POST" action="/session">
                                <input type="hidden" name="_method" value="DELETE"/>

                                <button class="text-white">Log Out</button>
                            </form>
                        </div>
            <?php else : ?>
                <a class="navOptions login" href=register>Register</a>
                <a class="navOptions login" href=login>Login</a>
            <?php endif; ?>
        </nav>