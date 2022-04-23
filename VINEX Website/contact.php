<!DOCTYPE html>
<html>
    <head>
        <title>Vinex Website</title>
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <body>
      <div class="div_1">
        <div class="header_div">
            <div class="logo_div">
            <a href="index.php"><img src="images/vinex.jpg" alt="" height="150px"  width="150px" id='logo'></a>
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
        <form action="contact.php" method="POST">
        <div class="contact-us">
            <h2> Write a message here</h2>
            
                 <input type="email" name="" id="email" placeholder="Enter your email">
            
               
                    <input type="password" name="" id="name" cols="20" rows="10" placeholder=" enter your password">
               
               
                   <textarea name="message" id="message" cols="50" rows="20" placeholder="Enter your message here"></textarea>
               
                <input type="submit" value="Send" onclick="sendMessage()">
           
        </div>
      </form>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="services.php">Services</a></li>
                <li class="list-inline-item"><a href="about.php">About</a></li>
                <li class="list-inline-item"><a href="contact.php">Contact</a></li>
                
            </ul>
            <p class="copyright">Vinex Company © 2021</p>
        </footer>
    
     </div>
     <script src="contact.js"></script>
    </body>
</html>