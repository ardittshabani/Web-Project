<?php
    include_once 'controller/productsController.php';

    function addAluminumCoil(){
        $id;
        $kodi;
        $foto;
        $thincness;
        $width;
        $pershkrimi;


        $Prod = new ProduktController;
        $all = $Prod->getAluminumCoil();

        foreach($all as $item){
            $kodi = $item[1];
            $foto = $item[2];
            $thincness = $item[3];
            $width = $item[4];
            $pershkrimi = $item['pershkimi'];

            echo "<div>";
            echo "<img src='images/Produktet/Aluminum coil/{$foto}'>";
            echo "<h2>{$kodi}</h2>";
            echo "<h4>Thincness: {$thincness}</h4>";
            echo "<h4>width: {$width}</h4>";
            echo "<div><p>{$pershkrimi}</p></div>";
            echo "</div>";
            
        }
    }
    function addAluminumPlate(){
        $prod = new ProduktController;
        $all = $prod->getAluminumPlate();

        foreach($all as $item){
            echo "<div>";
            echo "<img src='images/Produktet/Aluminum plate/{$item['foto']}'>";
            echo "<h2>{$item['kodi']}</h2>";
            echo "<h4>Permasat: {$item['permasat']}";
            echo "</div>";
        }
    }

    function addBolts(){
        $prod = new ProduktController;
        $all = $prod->getBolts();

        foreach($all as $item){
            echo "<div>";
            echo "<img src='images/Produktet/Bolts/{$item['foto']}'>";
            echo "<h2>{$item['titulli']}</h2>";
            echo "<h4>Diametri: {$item['diametri']}";
            echo "<p>{$item['pershkrimi']}</p>";
            echo "</div>";
        }
    }

    function addNuts(){
        $prod = new ProduktController;
        $all = $prod->getNuts();

        foreach($all as $item){
            echo "<div>";
            echo "<img src='images/Produktet/Nuts/{$item['foto']}'>";
            echo "<h2>{$item['titulli']}</h2>";
            echo "<p>{$item['pershkrimi']}</p>";
            echo "</div>";
        }
    }
?>

