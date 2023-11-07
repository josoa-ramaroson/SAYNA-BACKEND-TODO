<?php 

use Core\App;

$db = App::resolve('Core\Database');

$id_user = 1;


if(!empty($_POST["body"])){
    $db->query("INSERT INTO Todos(body,id_user) VALUES(:body,:id_user)", [
        'body' =>ucfirst(htmlspecialchars($_POST["body"])),
        'id_user' => $_POST["id_user"]
        ]);
        header('Location: /');
        exit();
}
  