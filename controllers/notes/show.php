<?php


$config = require "config.php";
$db = new Database($config['database']);


$heading = 'My Notes';

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET[ 'id']
    ])->findOrFail();

// dd($notes);

$currentId = 3;

authorize($note['user_id'] === $currentId);

require('views/notes/show.view.php'); 