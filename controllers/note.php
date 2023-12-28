<?php


$config = require "config.php";
$db = new Database($config['database']);


$heading = 'My Notes';

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET[ 'id']
    ])->fetch();

// dd($notes);
if (!$note){
    abort();
}

$currentId = 2;
$forbidden = 403;


if ($note['user_id'] != $currentId){
    abort($forbidden);
}




require('views/note.view.php'); 