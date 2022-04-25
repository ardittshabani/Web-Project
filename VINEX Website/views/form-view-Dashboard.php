<?php
    include_once '../controller/formController.php';

    function addMesages(){
        $menu = new FormController;
        
        $query = $menu->getMesages();

        foreach ($query as $item){
            echo "<div class='container'>";
            echo "<p>Emri: {$item['emri']}</p>";
            echo "<p>Email: {$item['email']}</p>";
            echo "<p>Titulli: {$item['titulli']}</p>";
            echo "<p>Mesazhi: {$item['msg']}</p>";
            echo "</div>";
            
        }
    }
?>
 