<?php

use Core\App;

$db = App::resolve('Core\Database');

$id_user = 1;

$todos = $db->query("SELECT * FROM  Todos")->get();

view("todo/list.view.php",[
  'todos'=> $todos,
  'id_user' => $id_user
]);