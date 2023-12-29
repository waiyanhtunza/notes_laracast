<?php
require "Validator.php";

$config = require "config.php";
$db = new Database($config['database']);


$heading = 'Create New Note';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $error = [];

    if(!Validator::string($_POST['body'],1,1000)){
            $error['body'] = 'A body is required';
    }
    
    if(empty($error)){
        $db->query('INSERT INTO notes (body,user_id) VALUES (:body,:user_id)',[
            'body'=> $_POST['body'],
            'user_id'=> 3,
        ]);
    }
   
    
    
}



require "views/notes/create.view.php";