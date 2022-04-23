<!DOCTYPE html>
<html>
    <head>
        <title>Vinex Website</title>
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="../css/dashboard.css">
    </head>
    <body>
        <!--Header -->
        <?php
            include_once 'header-dashboard.php';
        ?> 

        <?php
            include_once '../controller/menuController.php';

            if (isset($_GET['id'])){
                $idd = $_GET['id'];
            }

            $menu = new MenuController;
            $currentMenu = $menu->editAluminumCoil($idd);

            if (isset($_POST['submit'])){
                $menu->updateAluminumCoil($_POST, $idd);
            }
        ?>
        <form action="post" class="coil-form">
            Foto
            <input type="text" name="foto" value="<?php echo $currentMenu['foto'];?>">
            <br>
            Kodi:
            <input type="text" name="kodi" value="<?php echo $currentMenu['kodi'];?>">
            <br>
            Thincness:
            <input type="text" name="thincness" value="<?php echo $currentMenu['thincness'];?>">
            <br>
            Width:
            <input type="text" name="width" value="<?php echo $currentMenu['witdh'];?>">
            <br>
            <input type="submit" name="submit" value="Update">
        </form> 
    </body>
</html>