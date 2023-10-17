<?php 
require "../model/Database.php";
require "../function.php";

$db = new Database();

$id_user = 1;

if(isset($_GET["todo_id"])){
    
        $db->query("DELETE FROM Todos WHERE id = :id",[
            'id'=>intval($_GET["todo_id"])
        ]);
        header('Location: /');
    
    
}