<head>
    <link rel="stylesheet" href="../source/css/home-css/header.css">
</head>

    <header>
        <ul id="signIn" class="dropdown-content">
            <li><a class="black-text fz-13 modal-trigger" data-target="register-modal">REGISTRARSE</a></li>
            <li class="divider"></li>
            <li><a class="black-tex fz-13" href="../views/login.php">INICIAR SESIÓN</a></li>
        </ul>

        <div class="navbar-fixed">
            <nav role="navigation" class="header-color">
                <div class="nav-wrapper">
                    <a href="../views/index.php" id="logo-container" class="brand-logo "><img class="logo_img"
                            src="../source/img/PREDEV.png"></a>
                    <ul class="right hide-on-med-and-down ">
                        <li><a href="../views/index.php" id="home" class="a-nav tooltipped" data-position="button" data-tooltip="Inicio"
                                data-delay="50"><i class="fas fa-home tiny"></i> INICIO</a></li>
                        <li><a class="a-nav tooltipped" data-position="button" data-tooltip="Discriminación en Veracruz"
                                data-delay="50" href="../views/statistics.php" id="statistics"><i class="fas fa-chart-pie tiny"></i> ESTADISTICAS</a></li>
                        <li><a class="a-nav tooltipped" data-position="button"
                                data-tooltip="Instituciones colaboradoras" data-delay="50" href="#" id="collaborations"><i class="fas fa-hands-helping tiny"></i> COLABORACIONES</a>
                        </li>
                        <li><a class="dropdown-button li-login" href="#!" data-activates="signIn"><i
                                    class="fas fa-user-lock"></i><i class="left fas fa-caret-down"></i></a></li>
                        <li>
                            <div class="divider"></div>
                        </li>
                    </ul>
                    <ul id="nav-mobile" class="sidenav hide-on-large-only">
                        <li><a href="#" data-target="nav-mobile" class="a.nav hide-on-large-only dropdown-button"
                                data-activates="signIn2"><i class="fas fa-list"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <?php 
        require_once("components/home-components/register-modal.php")
    ?>

    <script src="../source/js/jquery-3.4.1.min.js"></script>
    <script src="../source/js/home-js/header.js"></script>