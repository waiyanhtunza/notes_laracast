<?php


$config = require "config.php";
$db = new Database($config['database']);


$heading = 'My Notes';

$notes = $db->query('select * from notes where id = :id', ['id' => $_GET[ 'id']])->fetchAll();

// dd($notes);


require('views/notes.view.php');