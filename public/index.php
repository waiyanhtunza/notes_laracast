<?php

use Core\Database;
const BASE_PATCH = __DIR__ . "/../";

require BASE_PATCH . "Core/functions.php";

spl_autoload_register(function ($class) {
    // dd($class);
    $class = str_replace("\\",DIRECTORY_SEPARATOR, $class);
    
    require base_path("{$class}.php");
});

// require base_path("Core/Database.php")
require base_path("Core/router.php");

