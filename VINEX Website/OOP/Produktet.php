<?php
  abstract Class Produktet {
    public $id;
    public $emriProduktit;
    public $folderi = '../images/Produktet/';
    public $foto;
    
    public function __costruct($id, $emriProduktit, $foto){
        $this->id = $id;
        $this->emriProduktit = $emriProduktit;
        $this ->foto = $foto;
    }

    public function shtoProduktin(){
    }

    public function teZinkuara(){
        
    }
}

?>