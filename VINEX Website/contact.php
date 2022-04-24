<!DOCTYPE html>
<html>
    <head>
        <title>Vinex Website</title>
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/IncludeParts.css">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto');

            .boddy{
                font-family: "Roboto, sans-serif";
                
            }

            .con{
                width: 800px;
                height: 600px;
                background: #fff;
                margin: 50px auto;
                box-sizing: border-box;
                padding: 40px;
                box-shadow: 0 0 20px rgba(72,98,85,0,0.6);
            }

            .con p {
                text-transform: uppercase;
                text-align: center;
                font-size: 45px;
                margin-bottom: 20px;
                color: #486255;
                letter-spacing: 1px;
            }

            .input, .msg .area{
                width: 100%;
                padding: 20px;
                box-sizing: border-box;
                margin-bottom: 25px;
                border: 2px solid #e9eaea;
                outline: none;
                transition: all 0.5s ease;

            }

            .login .input{
                width: 48%;
                float: left;
                margin-right: 4%;
            }

            .login .input:last-child{
                margin-right: 0;
            }
            details {
                 border: 1px solid #aaa;
                 border-radius: 4px;
                padding: .5em .5em 0;
            }

            summary {
            font-weight: bold;
            margin: -.5em -.5em 0;
            padding: .5em;
            }

            details[open] {
                padding: .5em;
            }

            details[open] summary {
                border-bottom: 1px solid #aaa;
                margin-bottom: .5em;
            }


            .btn{
                width: 250px;
                background: #486255;
                height: 50px;
                text-align: center;
                line-height: 50px;
                color: #fff;
                text-transform: uppercase;
                margin: 0 auto;
                cursor: pointer;
                border-radius: 5px;
            }

            .input:focus, .msg .area:focus{
                border: 2px solid $486255;
            }
        </style>
    </head>
    <body>
    <!--Header -->
    <?php
        include 'IncludeParts/header.php';
     ?> 
     <!--Footer -->
    <div class="boddy">
        <div class="con">
            <p>contact us</p>
            <form id="form" action="/" method="GET">
            <div class="login">
                <details>
                    <summary>Password Form</summary>
                   A form with a password field that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter
                </details>
                <input id="username" type="text" class="input" placeholder="Username" required />
                <input id="password" type="password" class="input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Your Password"  />
            </div>

            <div class="subject">
                <input type="text" class="input" placeholder="Subject(optional)">
            </div>
        
            
        </div>
       
        <div class="contact-us">
            <h2> Write a message here</h2>
            
               
                   <textarea name="message" id="message" cols="50" rows="20" placeholder="Enter your message here" required></textarea>
               
               <button id="submit" type="submit">Submit</button>
           
        </div>
      </form>
      <div id="error"></div>
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