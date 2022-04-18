<?php

     class Database{
        public $pdo;

        public function __construct(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=bolts', 'root', '');
                $this->pdo = $db;
            }catch(PDOException $exception){
                die($exception->getMessage());
            }
        }
        

     }



?>
