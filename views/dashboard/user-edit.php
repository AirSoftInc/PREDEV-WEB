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
    <link rel="stylesheet" href="../../source/css/dashboard-css/user-edit.css">

</head>

<body>

    <?php 
        require_once("../components/dashboard-components/header-component.php");
    ?>

    <main>
        <div class="align-container">
            <div>
                <p class="edittext" >Edita tu perfil</p><p class="edittext1" >Datos</p>
                <img src="../../source/img/user.png" style="width: 170px; margin-left: 20px;">
                <ul class="listadatos ml-15" id="list"></ul>
            </div>

        <div class="row">
          <form class="col s12" id="userEditForm">
            <div class="row">
              <div class="input-field col s6">
                <input  id="name" type="text" class="validate">
                <label for="first_name">Nombre</label>
              </div>
              <div class="input-field col s6">
                <input id="email" type="email" class="validate">
                <label for="last_name">Correo</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input  id="telephone" type="text" class="validate">
                <label for="disabled">Telefono</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="rfc" type="text" class="validate">
                <label for="password">RFC</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="text" class="validate">
                <label for="email">Contraseña</label>
              </div>
            </div>

            <div class="row">
                <div>
                    <button type="submit" id="btnSave" class="waves-effect waves-light btn right border-radius color-green-button">Editar</button>
                </div>
                <div class="right space-in-buttons">E</div>
                <div>
                    <a id="cancelForm" class="waves-effect waves-light btn right red border-radius" href="index.php">Cancelar</a>
                </div>
            </div>
          </form>
        </div>
            <!-- <div class="row">
              <a id="init" class="btn waves-effect waves-light border-radius" style="border-radius: 20px;" type="submit" name="action" href="index.php">Cancelar</a>
              <a id="init" class="btn waves-effect waves-light border-radius" style="border-radius: 20px;" type="submit" name="action" href="">Editar</a>
            </div> -->
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
    <script src="../../source/js/dashboard-js/user-edit.js"></script>
    <script src="../../source/js/dashboard-js/institutions.js"></script>
    <script src="../../source/helper/crud-function-service.js"></script>
    <script src="../../source/js/sweetalert2.js"></script>
    
</body>