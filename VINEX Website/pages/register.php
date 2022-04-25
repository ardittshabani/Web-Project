
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/signin.css'>
    <link rel="stylesheet" href="../css/IncludeParts.css">
   
    <style>
        .sign-div{
            display: none;
        }
        .boddy{
            background: #ecf1f4;
            font-family: sans-serif;
            text-align: center;
            width: 100%;
        }

        .form-wrap {
        width: 320px;
        background: #3e3d3d;
        padding: 2%;
        box-sizing: border-box;
        margin-left: 40%;
        margin-top: 1%;
        }
        .boddy h1 {
            text-align: center;
            color: #fff;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .boddy input{
            width: 100%;
            background: none;
            border: 1px solid #fff;
            border-radius: 4px;
            padding: 6px 15px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="button"]{
            background: #bac675;
            border: 0;
            cursor: pointer;
        }

        input[type="button"]:hover{
            background: #a4b15c;
            transition: .4s;
        }

        ::placeholder{
            color: #fff;

        }

    </style>
</head>
<body>
    <!--Header -->
    <?php
        include '../IncludeParts/header.php';
    ?>

    <div class="boddy">
    <div class="form-wrap">
        <form action="" method="POST">
        <h1>Sign up</h1>
        <input type="text" placeholder="Name" name="emri" required>
        <input type="text" placeholder="Username" name="username" required>
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="pasword" required>
        <input type="password" placeholder="Confirm Password" required>
        <input style="display:none;" type="text" placeholder="" name="roli" value="0" >
        <input type="submit" value="Save"  name="submit" >
        <p>
            You have an account?<a href="sign.php">Sign in</a>
        </p>
        </form> 
    </div>
    </div> 
    <!--Footer -->
    <?php
        include '../IncludeParts/footer.php';
    ?>
</body>
</html>

<?php
    include_once '../controller/formController.php';

    $form = new FormController;
    if (isset($_POST['submit'])){
        $form->insertUsers($_POST);
    }

    ?>