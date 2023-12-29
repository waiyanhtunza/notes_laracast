<?php
use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);



$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET[ 'id']
    ])->findOrFail();

// dd($notes);

$currentId = 3;

authorize($note['user_id'] === $currentId);


view('notes/show.view.php',[
    'heading'=> 'My Notes',
    'note'=> $note ,
    
]) ;