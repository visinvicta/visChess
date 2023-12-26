<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/about' => 'controllers/about.php',
    '/analysis' => 'controllers/analysis.php',
    '/game' => 'controllers/games/show.php',
    '/games' => 'controllers/games/index.php',
    '/mygames' => 'controllers/mygames.php',
    '/' => 'controllers/index.php',
    
];



function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}
function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);
