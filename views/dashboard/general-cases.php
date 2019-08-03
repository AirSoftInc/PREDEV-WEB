<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximumscale=1.0, user-scalable=no" />
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
                            <th scope="col">fecha</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Asignado a</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody id="generalCases">
                        <tr>
                            <td>Acusan a Manuel Huerta por discriminación: exigen se disculpe</td>
                            <td>7 marzo, 2019</td>
                            <td><strong class="caseSelected">PENDIENTE</strong></td>
                            <td><strong id="caseSelected">Sin asignar</strong></td>
                            <td>
                                <a class="btn-floating blue round-button" href="#" id="btnInfo" target= blank
                                data-toggle="tooltip" data-placement="top" title="Click para mas información"><i class="fas fa-info action-button"></i></a>
                                
                                <a class="btn-floating yellow round-button" href="#" id="btnUpdate" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-paint-brush action-button"></i></a>
                                
                                <a class="btn-floating red round-button" href="#" id="btnDelete" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-trash action-button"></i></a>
                                
                                <a class="btn-floating green round-button" href="#" id="btnUserChange" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-users action-button"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Exigen a CONAVIM avances por discriminación en servicios de salud</td>
                            <td>20 mayo, 2019</td>
                            <td><strong class="caseSelected">PENDIENTE</strong></td>
                            <td><strong id="caseSelected">Sin asignar</strong></td>
                            <td>
                                <a class="btn-floating blue round-button" href="#" id="btnInfo" target= blank
                                data-toggle="tooltip" data-placement="top" title="Click para mas información"><i class="fas fa-info action-button"></i></a>
                                
                                <a class="btn-floating yellow round-button" href="#" id="btnUpdate" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-paint-brush action-button"></i></a>
                                
                                <a class="btn-floating red round-button" href="#" id="btnDelete" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-trash action-button"></i></a>
                                
                                <a class="btn-floating green round-button" href="#" id="btnUserChange" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-users action-button"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Maestro de primaria denuncia discriminación</td>
                            <td>1 agosto, 2018</td>
                            <td><strong class="caseSelected">PENDIENTE</strong></td>
                            <td><strong id="caseSelected">Sin asignar</strong></td>
                            <td>
                                <a class="btn-floating blue round-button" href="#" id="btnInfo" target= blank
                                data-toggle="tooltip" data-placement="top" title="Click para mas información"><i class="fas fa-info action-button"></i></a>
                                
                                <a class="btn-floating yellow round-button" href="#" id="btnUpdate" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-paint-brush action-button"></i></a>
                                
                                <a class="btn-floating red round-button" href="#" id="btnDelete" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-trash action-button"></i></a>
                                
                                <a class="btn-floating green round-button" href="#" id="btnUserChange" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-users action-button"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php 
        require_once("../components/dashboard-components/side-nav-component.php");
    ?>

    <script src="../../source/js/jquery-3.4.1.min.js"></script>
    <script src="../../source/js/materialize.min.js"></script>
    <script src="../../source/js/dashboard-js/general-cases.js"></script>
</body>

</html>