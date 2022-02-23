<?php
 class Bolts extends Produktet{
     public $madhesia;
     public $filetat;

     public function __construct($id, $emriProduktit, $foto, $madhesia, $filetat){
        parent::__construct($id,$emriProduktit,$foto);
        $this->madhesia = $madhesia;
        $this->filetat = $filetat;
     }

     public function shtoProduktin(){
        echo "<div class = 'produkti'>";
        echo "<img src = '{$this->folderi}{$this->foto}'>";
        echo "<h2>{$this->emriProduktit}</h2>";
        echo "</div>";
    }

    public function teZinkuara(){
        return true;
    }
    
 }
?>