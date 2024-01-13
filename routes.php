<?php

$router->get('/', 'controllers/index.php');

$router->get('/analysis', 'controllers/analysis.php');
$router->post('/analysis', 'controllers/analysis.php');

$router->get('/about', 'controllers/about.php');

$router->get('/games', 'controllers/games/index.php');
$router->get('/game', 'controllers/games/show.php');
$router->delete('/game', 'controllers/games/destroy.php');

$router->get('/mygames', 'controllers/mygames.php')->only('auth');

$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php')->only('guest');

$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php')->only('guest');
$router->delete('/session', 'controllers/session/destroy.php')->only('auth');