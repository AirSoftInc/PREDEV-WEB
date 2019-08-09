<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plataforma PREDEV</title>
    <link rel="stylesheet" href="../source/css/materialize.min.css">
    <link rel="stylesheet" href="../source/css/predev.css">
    <link rel="stylesheet" href="../source/fonts/fontawesome-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="../source/css/home-css/home.css">
</head>

<body>
    <?php 
        require_once("components/home-components/header-component.php");
    ?>
    <main>
        <?php 
        require_once("components/home-components/map-component.php")
        ?>
    </main>
    <?php 
        require_once("components/home-components/footer-component.php");
    ?>

    <script src="../source/js/jquery-3.4.1.min.js"></script>
    <script src="../source/js/materialize.min.js"></script>
    <script src="../source/js/highcharts.js"></script>
    <script src="../source/js/exporting-chart.js"></script>
    <script src="../source/js/home-js/statistics.js"></script>
    <script src="../source/helper/municipality-helper.js"></script> 
    <script src="../source/helper/crud-function-service.js"></script>    
    <script src="../source/helper/lodash.js"></script>
    <script src="../source/helper/scraping-helper.js"></script>
    <script src="../service/scraping-service/scraping-service.js"></script>
</body>

</html>