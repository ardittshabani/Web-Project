<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard Admin</title>
        <link rel="stylesheet" href="../css/dashboard.css">
        <style>
        .container {
            border: 1px solid;
            width: 400px;
            margin: 1%;
            padding: 1%;
        }
        .cont-div{
            display: flex;
            justify-content: center;
            float: left;
        }
        </style>
    </head>
    <body>
    <!--Header -->
    <?php
        include 'header-dashboard.php';
     ?> 
    <!--Views form  -->
    <div class="cont-div">
    <?php
        include_once '../views/form-view-Dashboard.php';
        addMesages();
    ?>
    </div>
    </body>
</html>