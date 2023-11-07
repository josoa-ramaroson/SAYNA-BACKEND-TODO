<?php

$router->get('/', "todos/list.php");
$router->get('/edit', "todos/edit.php");


$router->post('/store', 'todos/store.php');


$router->put('/update', 'todos/update.php');

$router->delete('/delete', 'todos/delete.php');