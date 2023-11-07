<?php

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function base_path($path){
    return BASE_PATH . $path;
}

function abort($code = 404){
    http_response_code($code);

    require base_path("views/$code.php");
}

function view($path, $attributes = []){
    extract($attributes);

    return require base_path("views/$path");
}