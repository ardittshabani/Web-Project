<!DOCTYPE html>
<html>
    <head>
        <title>Vinex Website</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <div class="div_1">
        <div class="header_div">
            <div class="logo_div">
            <a href="index.php"><img src="images/vinex.jpg" alt="" height="150px"  width="150px" id='logo'></a>
            </div>
            <div class="navigate_div">
                <ul>
                    <li><a class='navebar' href="index.php">Home</a></li>
                    <li><a class='navebar' href="services.php">Services</a></li>
                    <li><a class='navebar' href="news.php">News</a></li>
                    <li><a class='navebar' href="about.php">About</a></li>
                    <li><a class='navebar' href="contact.php">Contact</a></li>
                </ul>
                <div class="sign_in_div">
                    <a href="signin.php">Sign in
                    </a>
                </div>
            </div>
        </div>
        <h1>THE FINEST STEEL </br>HAS TO GO THROUGH THE HOTTEST FIRE </h1>
    </div>
    <div class="div_2">
         <div class="div_2_1">
             <h2>LATEST PROJECTS</h2>
             <div class="div_2_1_1">
                <div>
                    <img src="images/project1.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolores cumque est doloremque in hic, vero obcaecati itaque cupiditate accusamus animi voluptatum. Voluptatum reiciendis laborum nam consequuntur sed, tempora amet!</p>
                </div>
                <div>
                    <img src="images/project2.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolores cumque est doloremque in hic, vero obcaecati itaque cupiditate accusamus animi voluptatum. Voluptatum reiciendis laborum nam consequuntur sed, tempora amet!</p>

                    
                </div>
                <div>
                    <img src="images/project3.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolores cumque est doloremque in hic, vero obcaecati itaque cupiditate accusamus animi voluptatum. Voluptatum reiciendis laborum nam consequuntur sed, tempora amet!</p>

                </div>
             </div>
         </div>
         <?php
        include 'IncludeParts/footer.php';
         ?>
    </div>
    </body>
</html>