<?php

$db = new Database();

$id_user = 1;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!empty($_POST["body"])){
      $db->query("INSERT INTO Todos(body,id_user) VALUES(:body,:id_user)", [
          'body' =>ucfirst(htmlspecialchars($_POST["body"])),
          'id_user' => $_POST["id_user"]
        ]);
        header('Location: /');
    }
}
$_POST = [];
$todos = $db->query("SELECT * FROM  Todos")->get();

require "views/todo.list.view.php";