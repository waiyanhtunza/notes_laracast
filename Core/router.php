<?php   

$routes =require base_path("routes.php");


// dd(parse_url($uri));
// dd($uri);

// if($uri === '/'){
//     require 'controllers/index.php';
// }else if ($uri === '/about'){
//     require 'controllers/about.php';
// }else if ($uri === '/contact'){
//     require 'controllers/contact.php';
// }



function routeToController($uri,$routes){
    if (array_key_exists($uri, $routes)) {
    require base_path($routes[$uri]); 
}else{
    abort();
}
}

function abort($code = 404){
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}
$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];

routeToController($uri, $routes);