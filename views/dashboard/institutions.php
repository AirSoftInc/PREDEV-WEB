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
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody id="generalCases">
                        <tr>
                            <td>12345</td>
                            <td>CONAPRED</td>
                            <td><strong class="caseSelected">quejas@conapred.org.mx</strong></td>
                            <td><strong class="caseSelected2">www.conapred.org.mx</strong></td>
                            <td>5552621490</td>
                            <td><strong id="caseSelected">Aceptado</strong></td>
                            <td>
                                <a class="btn-floating yellow round-button" href="#" id="btnUpdate" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-paint-brush action-button"></i></a>                                    
                            </td>
                            <td>
                                <a class="btn-floating red round-button" href="#" id="btnDelete" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-trash action-button"></i></a>
                            
                            </td>
                        </tr>
                        <tr>
                            <td>12346</td>
                            <td>CNDH</td>
                            <td><strong class="caseSelected">cndh.tv@cndh.org.mx.</strong></td>
                            <td><strong class="caseSelected2">www.cndh.org.mx</strong></td>
                            <td>9999421888</td>
                            <td><strong id="caseSelected">Aceptado</strong></td>
                            <td>
                                <a class="btn-floating yellow round-button" href="#" id="btnUpdate" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-paint-brush action-button"></i></a>                                    
                            </td>
                            <td>
                                <a class="btn-floating red round-button" href="#" id="btnDelete" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-trash action-button"></i></a>
                            
                            </td>
                        </tr>
                        <tr>
                            <td>12345</td>
                            <td>DIF Cordoba</td>
                            <td><strong class="caseSelected">comunicaciondifcordoba@gmail.com</strong></td>
                            <td><strong class="caseSelected2">www.difcordoba.gob.mx/site/</strong></td>
                            <td>2717121140</td>
                            <td><strong id="caseSelected">Aceptado</strong></td>
                            <td>
                                <a class="btn-floating yellow round-button" href="#" id="btnUpdate" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-paint-brush action-button"></i></a>                                    
                            </td>
                            <td>
                                <a class="btn-floating red round-button" href="#" id="btnDelete" target= blank
                                data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-trash action-button"></i></a>
                            
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

    <?php 
        require_once("../components/dashboard-components/footer-component.php");
    ?>

    <script src="../../source/js/jquery-3.4.1.min.js"></script>
    <script src="../../source/js/materialize.min.js"></script>
    <script src="../../source/js/dashboard-js/institutions.js"></script>
</body>