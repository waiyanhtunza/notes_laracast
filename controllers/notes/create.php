<?php
require base_path("Validator.php");

$config = require base_path("config.php");
$db = new Database($config['database']);

$error = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(! Validator::string($_POST['body'],1,1000)){
            $error['body'] = 'A body is required';
    }
    
    if(empty($error)){
        $db->query('INSERT INTO notes (body,user_id) VALUES (:body,:user_id)',[
            'body'=> $_POST['body'],
            'user_id'=> 3,
        ]);
    }
    
}

view('notes/create.view.php',[
    'heading'=> 'Create New Note',
    'error'=> $error ,
    
]) ;