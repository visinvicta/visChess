<?php

$router->get('/', 'index.php');

$router->get('/analysis', 'analysis.php');
$router->post('/analysis', 'analysis.php');

$router->get('/about', 'about.php');

$router->get('/games', 'games/index.php');
$router->get('/game', 'games/show.php');
$router->delete('/game', 'games/destroy.php');

$router->get('/mygames', 'mygames.php')->only('auth');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');