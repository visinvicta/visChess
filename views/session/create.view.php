<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<div class="content">
    <div class="main">
        <div class="header">
            <h1>Log in</h1>
        </div>

        <form method="POST" action="/session">
            <div class="register_container">

                <label for="email"><b>Email</b></label>
                <input type="text" name="email" id="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" id="password" required><br>

                <?php if (isset($errors['email'])) : ?>
                    <li><?= $errors['email'] ?></li>
                <?php endif; ?>

                <?php if (isset($errors['password'])) : ?>
                    <li><?= $errors['password'] ?></li>
                <?php endif; ?>

                <button type="submit" class="registerbtn">Log in</button>
            </div>

        </form>
    </div>


<?php require base_path('views/partials/footer.php'); ?>