<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../source/css/materialize.min.css">
    <link rel="stylesheet" href="../../source/css/predev.css">
    <link rel="stylesheet" href="../../source/fonts/fontawesome-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../source/css/dashboard-css/dashboard.css">
    <link rel="stylesheet" href="../../source/css/dashboard-css/general-cases.css">
</head>

<body>

    <?php 
        require_once("../components/dashboard-components/header-component.php");
    ?>

    <main>
        <div class="align-container">
            <div class="row">
                <div class="col">
                    <table class="striped table-size">
                        <thead>
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Asignado a</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody id="generalCases"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php 
        require_once("../components/dashboard-components/side-nav-component.php");
    ?>

    <?php 
        require_once("../components/dashboard-components/footer-component.php");
    ?>

    <script src="../../source/js/jquery-3.4.1.min.js"></script>
    <script src="../../source/js/materialize.min.js"></script>
    <script src="../../source/helper/crud-function-service.js"></script>
    <script src="../../source/helper/municipality-helper.js"></script>
    <script src="../../source/helper/lodash.js"></script>
    <script src="../../source/helper/scraping-helper.js"></script>
    <script src="../../source/js/dashboard-js/general-cases.js"></script>
    <script src="../../source/js/sweetalert2.js"></script>
</body>

</html>