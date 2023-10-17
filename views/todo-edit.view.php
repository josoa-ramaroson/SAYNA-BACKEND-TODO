<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Todo Apps</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/css/adminlte.min.css">
  <link rel="stylesheet" href="../public/css/fontawesome.min.css">
  <link rel="stylesheet" href="../public/css/li.css">
<style>
  form{
    width: 100%;
  }
  input[type="text"]{
    width: 300%;
  }
</style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <img src="public/images/todo.png" alt="">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">TODO App</a>
      </li>
    </ul>
  </nav>
</div>

    <div class="card-header ui-sortable-handle" style="cursor: move;">
              
                <div class="card-body">
                      <!-- /.card-header -->
                <form method="POST" >
                    <div class="input-group input-group-sm">
                    <input type="hidden" name="id_user" value="<?=$id_user?>" >
                
                        <input type="text" class="form-control" required name="body">
                        <span class="input-group-append">
                            <button type="submit" class="btn btn-info btn-flat">+</button>
                        </span>
                    </div>
                </form>
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                
                <?php foreach ($todos as $todo): 
                  if ($todo_id == $todo["id"]):
                ?>

                <li class="todo-item">
                    <!-- checkbox -->

                    <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" name=<?="todo".$todo["id"]?> id=<?="todoCheck".$todo["id"]?> <?=$todo["done"]?"checked":""?>>
                        <label class="text" for=<?="todoCheck".$todo["id"]?>>
                            <form action="/controllers/todo-update.php" method="POST" id="modified-form">
                              <input type="hidden" name="id_user" value="<?=$id_user?>" >
                              <input type="hidden" name="todo_id" value="<?=$todo["id"]?>" >
                              <input type="text" name="body" id="modify" required value="<?= $todo["body"]?>">
                            </form>
                        <!-- todo text -->     
                             
                            

                        </label>
                    
                      </div>
                    <!-- Emphasis label -->
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                    <a href="/controllers/todo-edit.php?todo_id=<?=$todo["id"] ?>">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="/controllers/todo-delete.php?todo_id=<?=$todo["id"] ?>">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
                </li>
            <?php else:?>
              <li class="todo-item">
                    <!-- checkbox -->

                    <div class="icheck-primary d-inline ml-2">
                        <a href="/controllers/todo-update.php?method=PUT&todo_id=<?=$todo['id']?>&done=<?=($todo["done"]== 1)?0:1?>">
                        <input type="checkbox" name=<?="todo".$todo["id"]?> id=<?="todoCheck".$todo["id"]?> <?=$todo["done"]?"checked":""?>>
                        <label class="text" for=<?="todoCheck".$todo["id"]?>>
                            <a href="/controllers/todo-update.php?method=PUT&todo_id=<?=$todo['id']?>&done=<?=($todo["done"]== 1)?0:1?>">
                        <!-- todo text -->     
                              <?= $todo["body"]?>
                            </a>

                        </label>
                      </a>
                      </div>
                    <!-- Emphasis label -->
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <a href="/controllers/todo-edit.php?todo_id=<?=$todo["id"] ?>">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="/controllers/todo-delete.php?todo_id=<?=$todo["id"] ?>">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
                </li>
            <?php endif?>
                <?php endforeach?>
                </ul>
                </div>
    </div>


<script>
  let modified = document.getElementById("modify"); 
  let form = document.getElementById("modified-form");

  modified.onkeypress = (e)=> {
 
  }
</script>
   











<!-- jQuery -->
<script src="../public/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/js/adminlte.min.js"></script>
<script src="../public/js/todo-update.js"></script>



</body>
</html>