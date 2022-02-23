<?php
    Class SteelWire extends Produktet{
        public $lloji;
        public $gjatesia;

        public function __construct($id, $emriProduktit, $foto,$lloji,$gjatesia){
            parent::__construct($id, $emriProduktit, $foto)  
            $this->lloji = $lloji;
            $this->gjatesia = $gjatesia; 
        }

        public function shtoProduktin(){
            echo "<div class = 'produkti'>";
            echo "<img src = '{$this->folderi}{$this->foto}'>";
            echo "<h2>{$this->emriProduktit}</h2>";
            echo "</div>";
        }

        public function teZinkuara(){
            return false;
        }
    }
?>