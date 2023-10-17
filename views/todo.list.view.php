<?php require "views/partials/header.php" ?>


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
                <form a method="POST" >
                    <div class="input-group input-group-sm">
                    <input type="hidden" name="id_user" value="<?=$id_user?>" >
                
                        <input type="text" class="form-control" required name="body">
                        <span class="input-group-append">
                            <button type="submit" class="btn btn-info btn-flat">+</button>
                        </span>
                    </div>
                </form>
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                
                <?php foreach ($todos as $todo): ?>
                <li class="todo-item">
                    <!-- checkbox -->

                    <div class="icheck-primary d-inline ml-2">
                        <a href="/controllers/todo-update.php?method=PUT&todo_id=<?=$todo['id']?>&done=<?=($todo["done"]== 1)?0:1?>">
                        <input type="checkbox" name=<?="todo".$todo["id"]?> id=<?="todoCheck".$todo["id"]?> <?=$todo["done"]?"checked":""?>>
                        <label  for=<?="todoCheck".$todo["id"]?>>
                            <a class="text" href="/controllers/todo-update.php?method=PUT&todo_id=<?=$todo['id']?>&done=<?=($todo["done"]== 1)?0:1?>">
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
                <?php endforeach?>
                </ul>
                </div>
    </div>



    <?php require "views/partials/footer.php" ?>