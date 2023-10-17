<?php
require "model/Database.php";
require "function.php";
if($_SERVER["REQUEST_METHOD"] == "PUT"){
    echo "je suis la ";
    die();
}
require "controllers/todo.list.php";