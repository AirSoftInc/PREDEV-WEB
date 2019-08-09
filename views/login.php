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

</head>

<body class="background">
  <div id="rect" class="card-panel hoverable">
    <main class="login">
        <div class="oval-half-red">
          <a href="index.php">
            <img class="logo_login img-login" src="../source/img/PREDEV.png">
          </a>
          <h2 class="title_login">Bienvenido</h2>
          <h1 class="subtitle_login" >Iniciar Sesion</h1>
          <a id="password1" href="" class="">Olvide mi contraseña</a>
        </div> 

        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Correo</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Contraseña</label>
                </div>
              </div>
            </form>
            <div class="row">
              <a id="init" class="btn waves-effect waves-light border-radius" type="submit" name="action" href="index.php">Cancelar</a>
              <a id="init" class="btn waves-effect waves-light border-radius" type="submit" name="action" href="dashboard/index.php">Ingresar</a>
            </div>
        </div>
    </main>
  </div>

    <script src="../source/js/jquery-3.4.1.min.js"></script>
    <script src="../source/js/materialize.min.js"></script>
</body>
</html>