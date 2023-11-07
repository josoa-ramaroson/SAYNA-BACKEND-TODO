<?php 
use Core\App;

$db = App::resolve('Core\Database');

$id_user = 1;

if(isset($_GET["todo_id"])){
    
        $db->query("DELETE FROM Todos WHERE id = :id",[
            'id'=>intval($_GET["todo_id"])
        ]);
        header('Location: /');   
}