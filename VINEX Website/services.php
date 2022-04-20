<!DOCTYPE html>
<html>
    <head>
        <title>Vinex Website</title>
        <link rel="stylesheet" href="css/services.css">
        <link rel="stylesheet" href="css/IncludeParts.css">
    </head>
    <body>
    <!--Header -->
    <?php
        include_once 'IncludeParts/header.php';
     ?> 
    <div class="con base-div">
        <div class="con buttons-div">
            <div class="button-div alu-coil">
                <button class="btn-pro" onclick = "coil()">Aluminium Coil</button>
            </div>
            <div class="button-div alu-plate">
                <button class="btn-pro" onclick = "plate()">Aluminium Plate</button>
            </div>
            <div class="button-div">
                <button class="btn-pro" onclick = "bolts()">Bolts</button>
            </div>
            <div class="button-div">
                <button class="btn-pro" onclick = "nuts()">Nuts</button>
            </div>
        </div>
        <div class="products-div">
            <div id="plate" class="con-prod">
            <?php 
                include_once 'views/readProduktet.php';
                addAluminumPlate();
            ?>
            </div>
            <!---->
            <div id="coil" class="con-prod">
            <?php 
                include_once 'views/readProduktet.php';
                addAluminumCoil();
            ?>
            </div>
            <div id="bolts" class="con-prod">
            <?php 
                include_once 'views/readProduktet.php';
                addBolts();
            ?>
            </div>
            <div id="nuts" class="con-prod">
            <?php 
                include_once 'views/readProduktet.php';
                addNuts();
            ?>
            </div>
        </div>
    </div>
     <!--Footer -->
     <?php
        include_once 'IncludeParts/footer.php';
     ?>
      <script src='js/Products.js' type='text/javascript'></script>
    </body>
</html>