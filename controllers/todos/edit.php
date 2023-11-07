<?php

use Core\App;

$db = App::resolve('Core\Database');

$id_user = 1;

$_POST = [];
$todos = $db->query("SELECT * FROM  Todos")->get();

$todo_id = $_GET["todo_id"];

view("todo/edit.view.php",[
  "todo_id" => $todo_id,
  "todos" => $todos
]);