<?php

const BASE_PATCH = __DIR__ . "/../";

require BASE_PATCH . "Core/functions.php";

spl_autoload_register(function ($class) {

    $class = str_replace("\\",DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

require base_path("Core/router.php");
//connect to database;



// $db = new Database();
// $posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);




// $id = $_GET['id'];
// $query = "SELECT * FROM posts WHERE id = :id ";  
// $posts = $db->query($query,[':id' => $id])->fetchAll();

