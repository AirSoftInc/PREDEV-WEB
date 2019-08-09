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
    <link rel="stylesheet" href="../../source/css/dashboard-css/institutions.css">
</head>

<body>

    <?php 
        require_once("../components/dashboard-components/header-component.php");
    ?>

    <main>
        <div class="align-container">
            <div class="row">
                <div class="col">
                    <br><br>
                    <table class="striped table-size">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Institución</th>
                            <th scope="col">Email</th>
                            <th scope="col">Página web</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Aceptar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody id="generalInstitutions"></tbody>
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
    <script src="../../source/js/dashboard-js/institutions.js"></script>
    <script src="../../source/js/sweetalert2.js"></script>

</body>