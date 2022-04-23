<?php   
    require_once '../controller/menuController.php';


    function addAluminiumCoil(){
        $menu = new MenuController;
        
        $query = $menu->getAluminumCoil();

        foreach ($query as $item){
            echo "<tr>";
            echo "<td>{$item['id']}</td>";
            echo "<td>{$item['foto']}</td>";
            echo "<td>{$item['kodi']}</td>";
            echo "<td>{$item['thincness']}</td>";
            echo "<td>{$item['witdh']}</td>";
            echo "<td><a class='edit-coil' href='editAluminumCoil.php?id={$item['id']}'>Edit</a></td>";
            echo "<td><button>Delete</button></td>";
            echo "<tr>";
        }
    }

    function addAluminiumPlate(){
        $menu = new MenuController;
        
        $query = $menu->getAluminumPlate();

        foreach ($query as $item){
            echo "<tr>";
            echo "<td>{$item['id']}</td>";
            echo "<td>{$item['foto']}</td>";
            echo "<td>{$item['kodi']}</td>";
            echo "<td>{$item['permasat']}</td>";
            echo "<td><a class='edit-plate' href='editAluminumPlate.php?id={$item['id']}'>Edit</a></td>";
            echo "<td><button>Delete</button></td>";
            echo "<tr>";
        }
    }

    function addBolts(){
        $menu = new MenuController;
        
        $query = $menu->getBolts();

        foreach ($query as $item){
            echo "<tr>";
            echo "<td>{$item['id']}</td>";
            echo "<td>{$item['foto']}</td>";
            echo "<td>{$item['titulli']}</td>";
            echo "<td>{$item['diametri']}</td>";
            echo "<td>{$item['pershkrimi']}</td>";
            echo "<td><a class='bolts' href='editProduct.php?id={$item['id']}'>Edit</a></td>";
            echo "<td><button>Delete</button></td>";
            echo "<tr>";
        }
    }

    function addNuts(){
        $menu = new MenuController;
        
        $query = $menu->getNuts();

        foreach ($query as $item){
            echo "<tr>";
            echo "<td>{$item['id']}</td>";
            echo "<td>{$item['foto']}</td>";
            echo "<td>{$item['titulli']}</td>";
            echo "<td>{$item['pershkrimi']}</td>";
            echo "<td><a class='nuts' href='editProduct.php?id={$item['id']}'>Edit</a></td>";
            echo "<td><button>Delete</button></td>";
            echo "<tr>";
        }
    }

    
?>