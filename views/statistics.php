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
        <div class="section container-title ">
            <div class="container  section-title center">
                <h3 class="white-text">Estadisticas discriminatorias en Veracruz</h3>
                <h4>Denuncia, no te calles ¡PREDEV está contigo!</h4>
            </div>
        </div>
        <div class="">
            <p class="parrafo" style="margin-left: 500px; margin-top: 50px; color: #333333; font-size: 20px; font-family: Roboto; font-weight: bold;">Mapa estadístico de discriminación</p>
        </div>
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