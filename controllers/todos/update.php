<?php 

use Core\App;

$db = App::resolve('Core\Database');

$id_user = 1;


if(isset($_GET["todo_id"])){
    if(isset($_GET['done'])){
            $db->query('UPDATE Todos SET done = :done WHERE id = :todo_id',[
            'done'=>intval($_GET['done']),
            'todo_id'=> intval($_GET["todo_id"])
        ]);
      
        header('Location: /');
    }
    
}
if(isset($_POST['body'])){
 
    $db->query('UPDATE Todos SET body = :body WHERE id = :todo_id',[
        'body'=>ucfirst(htmlspecialchars($_POST["body"])),
        'todo_id'=> intval($_POST["todo_id"])
    ]);

    header('Location: /');
}
