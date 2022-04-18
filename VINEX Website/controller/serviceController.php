<?php
    require_once './config/database.php';
class ServiceController{
    public  $db ;

    public function __construct(){
        try{
            $db = new Database();
        }
        catch(PDOException $e){
            die($e.getMessage());
        }
    }

   /* public  function printBolts(){
        $query = $this->db->getBolts();

        foreach($query as $key=>$value){
            echo "<div class = 'produkti'>";
            echo "<img src = 'images/Produktet/{$value['foto']}'>";
        }
    }*/

    public function getBolts(){
        $x = $this->pdo->query('SELECT * FROM bolts');

       return $x->fetchAll();
    }

    public function getSteelWire(){
        $query = $this->pdo->query('SELECT * FROM steelwire');

        return $query->fetchAll();
    }
}
?>