<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/signin.css'>
   
</head>
<body>
    <div class="center_div">
    <div class="div_1">
        <div class="div_1_left">
               <div>
                <h1 class="sign_in_h1">Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <a href="sign.php">
                <button type="button" class="buton">SIGN IN</button>
                </a>
               </div>
        </div>
        <div class="div_1_right">
            <h1>Create Account</h1>
            <div id="error">
                <form action="" id="form">
                    <input type="text" name="" id="name" placeholder="Enter name">
                    <input type="text" id="surname" placeholder="Enter surname">
                    <input type="email" id="email" placeholder="Enter email">
                    <input type="password" id="password" placeholder="Enter Password">
                    <button type="button" class="buton">SIGN UP</button>    
                </form>
            </div>
        </div>
    </div>
    
    <?php
        include 'IncludeParts/footer.php';
         ?>
    </div>
   
</body>
</html>