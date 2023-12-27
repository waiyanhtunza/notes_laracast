<?php

require "functions.php";
require "Database.php";
require "router.php";
//connect to database;



// $db = new Database();
// $posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);


$config = require "config.php";

$db = new Database($config['database']);

// $id = $_GET['id'];
// $query = "SELECT * FROM posts WHERE id = :id ";  
// $posts = $db->query($query,[':id' => $id])->fetchAll();

