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
        include 'IncludeParts/header.php';
     ?> 
    <div class="con base-div">
        <div class="con buttons-div">
            <div class="button-div alu-coil">
                <button class="btn-pro" onclick = "coil()">Aluminium Coil</button>
            </div>
            <div class="button-div alu-plate">
                <button class="btn-pro" onclick = "plate()">Aluminium Plate</button>
            </div>
        </div>
        <div class="products-div">
            <div id="plate" class="con-prod">
                <div class="product _plate">
                    <img src="Aluminium coil.png" alt="" width="200px" heigh="200px ">
                    <h2 class="text-inside-div">Kodi</h2>
                    <h4 class="text-inside-div">Thincness</h4>
                    <h4 class="text-inside-div">width</h4>
                    <p class="text-inside-div">Info:</p>
                </div>
            </div>
            <!---->
            <div id="coil" class="con-prod">
                <div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div>
                <div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div>
                <div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div>
                <div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div><div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div>
                <div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div>
                <div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div>
                <div class="product _coil">
                    <img src="Aluminum plate.png" alt="" width="200px" heigh="200px ">
                    <h2>Produkti1</h2>
                </div>
            </div>
        </div>
    </div>
     <!--Footer -->
     <?php
        include 'IncludeParts/footer.php';
     ?>
      <script src='js/Products.js' type='text/javascript'></script>
    </body>
</html>