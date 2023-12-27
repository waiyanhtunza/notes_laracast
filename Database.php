<?php

class Database {

    public $connection;

    public function __construct($config ,$username = 'root',$password = '') {

        $dsn = 'mysql:' . http_build_query($config,'',';');

        // $dsn = "mysql:host=127.0.0.1;port=3306;dbname=myapp;user=root;charset=utf8mb4";

        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }


    public function query($query,$params = []){
        
        $statment = $this->connection->prepare($query);
        $statment->execute($params);

        return $statment;
        
    }
}