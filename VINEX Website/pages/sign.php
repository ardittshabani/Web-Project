<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign in</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--<link rel='stylesheet' type='text/css' media='screen' href='css/sign.css'>-->
    <link rel="stylesheet" href="../css/IncludeParts.css">
    <style>
        .sign-div{
            display: none;
        }
        .boddy{
            min-height: 100vh;
            background: #eee;
            display: flex;
            font-family: sans-serif;
        }
        .con{
            margin: auto;
            width: 500px;
            max-width: 90%;
            font-family: sans-serif;
            text-align: center;
        }
        .con form {
            width: 100%;
            height: 100%;
            padding: 20px;
            background: white;
            border-radius: 4px;
            box-shadow: 0 8px 16px rgba(0,0,0,.3);
            text-align: left;
        }

        .con form h1{
            text-align: center;
            margin-bottom: 24px;
            color: #222;
        }

        .con form .form-control{
            width: 95%;
            height: 40px;
            background: white;
            border-radius: 4px;
            border: 1px 0 18px 0;
            padding: 0 10px;
        }

        .con form .btn{
            margin-left: 50%;
            margin-top: 5%;
            transform: translateX(-50%);
            width: 120px;
            height: 34px;
            border: none;
            outline: none;
            background: #27a327;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
            color: white;
            border-radius: 4px;
            transition: .3s;
        }

        .welcome{
            font-size: -webkit-xxx-large;
        }
    </style>
</head>
<body>
        <!--Header -->
        <?php
        include '../IncludeParts/header.php';
     ?> 
      <section class="boody">
        <div class="con">
            <h1 class="welcome">Welcome Back</h1>
            <form  action="post">
                <h1>Login Form</h1>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" required name="username">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" required name="pasword">
                </div>
                <input type="submit" class="btn" value="Login" name="submit">
                <p>Dont have an account?<a href="register.php">Sing up</a></p>

                <?php
                    include_once '../controller/formController.php';

                    $form = new FormController;

                    if (isset($_POST['submit'])){
                        $username = $_POST['username'];
                        $pasword = $_POST['paswor'];
                        $form->signAdminUser($username, $pasword);
                     // $form->signAdminUser($_POST['username'], $_POST['pasword']);
                    }

                ?>
            </form>
        </div>
      </section>
     <!--Footer -->
     <?php
        include '../IncludeParts/footer.php';
     ?>
    </div>
</body>
</html>

