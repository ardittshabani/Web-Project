<!DOCTYPE html>
<html>
    <head>
        <title>Vinex Website</title>
        <link rel="stylesheet" href="css/services.css">
    </head>
    <body>
      <div class="div_1">
            <div class="header_div">
                <div class="logo_div">
                <a href="index.php"><img src="images/logo/vinex.jpg" alt="" height="150px"  width="150px" id='logo'></a>
                </div>
                <div class="navigate_div">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
      <div class="product_left">
        <ul >
            <li>Bolts</li>
        </ul>
      </div>
      <div class="product_right">
        <?php
        require_once 'controller/serviceController.php';
        public  function printBolts(){
            $query = $this->db->getBolts();
    
            foreach($query as $key=>$value){
                echo "<div class = 'produkti'>";
                echo "<img src = 'images/Produktet/{$value['foto']}'>";
            }
        }
        printBolts();
        ?>
      </div>
    </div>
    <?php
        include 'IncludeParts/footer.php';
     ?>
    </body>
</html>