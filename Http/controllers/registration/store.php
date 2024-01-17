<?php

use Core\Validator;
use Core\Database;
use Core\Authenticator;
use Core\App;

$db = App::resolve(Database::class);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::string($username, 1, 12)) {
    $errors['username'] = 'Username must be between 1 and 12 characters.';
}

if (!Validator::email($email)) {
    $errors['email'] = 'E-mailadress not valid.';
}

if (!Validator::string($password, 8, 20)) {
    $errors['password'] = 'Password must be between 8 and 20 characters.';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}


$existingemail = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

$user = $db->query('select * from users where username = :username', [
    'username' => $username
])->find();

if ($existingemail || $user) {
    header('location: /');
    exit();

} else {
    $db->query('INSERT INTO users(email, username, password) VALUES(:email, :username, :password)', [
        'email' => $email,
        'username' => $username,
        'password' => password_hash($password, $PASSWORD_BCRYPT)
    ]);

    $authenticator = new Authenticator();


    $authenticator->login($user);

    header('location: /');
    exit();
}
