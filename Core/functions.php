<?php

use Core\Response; 
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition,$status=Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}
function base_path($path){
    return BASE_PATCH . $path;
    }

function view($path,$attribute = [])
{
    extract($attribute);
    // dd($attribute);
    // dd($foo);
    require base_path('views/'. $path);
}

 