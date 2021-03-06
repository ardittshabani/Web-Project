<!DOCTYPE html>
<html>
    <head>
        <title>Vinex Website</title>
        <link rel="stylesheet" href="../css/contact.css">
        <link rel="stylesheet" href="../css/IncludeParts.css">

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
        include '../IncludeParts/header.php';
     ?> 
     <!--Footer -->
    <div class="boddy">
        <div class="con">
        <form action="" method="post">    
            <p>contact us</p>
            <form id="form" action="/" method="GET">
            <div class="login">
                <input type="text" class="input" placeholder="Your Name" name="emri" required>
                <input type="text" class="input" placeholder="Your Email Address" name="email" required>
            </div>

            <div class="subject">
                <input type="text" class="input" placeholder="Subject" name="titulli" required>
            </div>

            <div class="msg">
                <textarea name="msg" class="area" cols="30" rows="10" placeholder="Leave a Message" required></textarea>
            </div>

            <input class="btn" type="submit" name="submit" placeholder="submit">
            </form>
        </div>
    </div> 
     <?php
        include '../IncludeParts/footer.php';
     ?>
    </body>
</html>

<?php
    include_once '../controller/formController.php';

    $form = new FormController;
    
    if (isset($_POST['submit'])){
        $form->insertMesages($_POST);
    }
?>