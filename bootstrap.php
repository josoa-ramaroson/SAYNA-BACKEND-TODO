<?php

use Core\Container;
use Core\Database;
use Core\App;

$container =  new Container();
$container->bind('Core\Database',function () {    
    $db = new Database();
    return $db;

});
App::setContainer($container);

