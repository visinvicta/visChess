<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<div class="content">
    <div class="main">
        <div class="header">
            <h1>Register a new user</h1>
        </div>

        <form method="POST">
            <div class="register_container">
                               
            <label for="username"><b>Username</b></label>
                <input type="username" name="username" id="username" required>

                <label for="email"><b>Email</b></label>
                <input type="text" name="email" id="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" id="password" required><br>

                <!-- <label for="password-repeat"><b>Repeat Password</b></label>
                <input type="password" name="password-repeat" id="password-repeat" required> -->

                <?php if (isset($errors['email'])) : ?>
                        <li><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['password'])) : ?>
                        <li><?= $errors['password'] ?></li>
                    <?php endif; ?>
                
                <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="signin_container">
                <p>Already have an account? <a href="/login">Sign in</a>.</p>
            </div>
        </form>
    </div>


    <?php require base_path('views/partials/footer.php'); ?>