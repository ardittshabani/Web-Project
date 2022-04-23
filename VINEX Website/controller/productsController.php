<?php
    require_once 'config/database.php';

    class ProduktController {
        public $db;

        public function __construct(){
            $this->db = new Database;
        }
        
        public function getAluminumCoil(){
            $query = $this->db->pdo->query('SELECT * FROM aluminum_coil');

            return $query->fetchAll();
        }

        public function getAluminumPlate(){
            $query = $this->db->pdo->query('SELECT * FROM aluminum_plate');

            return $query->fetchAll();
        }

        public function getBolts(){
            $query = $this->db->pdo->query('SELECT * FROM bolts');

            return $query->fetchAll();
        }

        public function getNuts(){
            $query = $this->db->pdo->query('SELECT * FROM nuts');

            return $query->fetchAll();
        }
    }
?>