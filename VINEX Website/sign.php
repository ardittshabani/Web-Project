<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign in</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/sign.css'>
    
</head>
<body>
    <div class="center_div">
        <div class="div_1">
           <div class="div_1_1">
               <div>
                 <input type="email" id="email" placeholder="Enter email">
                 <input type="password" id="password" placeholder="Enter Password">
                 <a href="">forgot password?</a>
                 <button type="button" class="buton">SIGN IN</button>
                </div>
           </div>
        </div>
        
        <?php
        include 'IncludeParts/footer.php';
         ?>
    </div>
</body>
</html>