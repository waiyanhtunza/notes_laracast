<?php

const BASE_PATCH = __DIR__ . "/../";

require BASE_PATCH . "functions.php";
require base_path("Database.php") ;
require base_path("Response.php");
require base_path("router.php");
//connect to database;



// $db = new Database();
// $posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);




// $id = $_GET['id'];
// $query = "SELECT * FROM posts WHERE id = :id ";  
// $posts = $db->query($query,[':id' => $id])->fetchAll();

