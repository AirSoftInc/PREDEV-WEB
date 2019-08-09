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
    <link rel="stylesheet" href="../source/css/style_login.css">
    <link rel="stylesheet" href="../source/css/alertify.core.css">
    <link rel="stylesheet" href="../source/css/alertify.default.css">

</head>

<body class="background">
  <div id="rect" class="card-panel hoverable">
    <main class="login">
        <div class="oval-half-red">
          <a href="index.php">
            <img class="logo_login img-login" src="../source/img/PREDEV.png">
          </a>
          <h2 class="title_login">Bienvenido</h2>
          <h1 class="subtitle_login" >Iniciar Sesión</h1>
          <a href="index.php"><i class="fas fa-home"></i> Regresar a inicio</a>
        </div> 

        <div class="row">
            <form class="col s12" id="formLogin">
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" name="email">
                  <label for="email">Correo</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate" name="password">
                  <label for="password">Contraseña</label>
                </div>
              </div>
              <div class="row">
                <button id="cancel" class="btn waves-effect waves-light border-radius" type="reset" name="action">Cancelar</button>
                <button class="btn waves-effect waves-light border-radius" type="submit" id="bntlogin" href="#">Ingresar</button>
            </div>
            </form>
        </div>
    </main>
  </div>

    <script src="../source/js/jquery-3.4.1.min.js"></script>
    <script src="../source/js/materialize.min.js"></script>
    <script src="../source/js/home-js/login.js"></script>
    <script src="../source/helper/crud-function-service.js"></script>
    <script src="../source/js/alertify.min.js"></script>
</body>
</html>