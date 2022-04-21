<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Admin</title>
        <link rel="stylesheet" href="../css/dashboard.css">
        <style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>
    </head>

    <body>
    <!--Header -->
        <?php
            include 'header-dashboard.php';
        ?> 

        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Kodi</th>
                    <th>Thincness</th>
                    <th>width</th>
                </tr>
                <tbody>
                <?php
                    include_once '../views/Produktet-Dashboard.php';
                    addAluminiumCoil();
                ?>
                </tbody>
            </thead>
        </table>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Kodi</th>
                    <th>Permasat</th>
                </tr>
                <tbody>
                <?php
                    include_once '../views/Produktet-Dashboard.php';
                    addAluminiumPlate();
                ?>
                </tbody>
            </thead>
        </table>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Titulli</th>
                    <th>Diamtri</th>
                    <th>Permasat</th>
                </tr>
                <tbody>
                <?php
                    include_once '../views/Produktet-Dashboard.php';
                    addBolts();
                ?>
                </tbody>
            </thead>
        </table>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Titulli</th>
                    <th>Pershkrimi</th>
                </tr>
                <tbody>
                <?php
                    include_once '../views/Produktet-Dashboard.php';
                    addNuts();
                ?>
                </tbody>
            </thead>
        </table>
    </body>
</html>
