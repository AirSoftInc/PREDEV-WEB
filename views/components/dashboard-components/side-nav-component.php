<div class="section">
    <div class="col s12 m4 l3">
        <ul id="nav-mobile" class="side-nav bg-blue" style="transform: translateX(0%);">
            <li>
                <div class="user-view">
                    <a href="../index.php"><img class="responsive-img center das-img"
                            src="../../source/img/PREDEV.png"></a>
                </div>
            </li>
            <li class="side-nav-title white-text">Menu</li>
            <li class="side-nav-item" id="home"><a href="../dashboard/index.php" class="a-nav white-text waves-effect"><i
                        class="white-text fas fa-hands-helping"></i>Inicio</a></li>
            <li class="side-nav-item" id="institutions"><a href="../dashboard/institutions.php" class="a-nav white-text waves-effect"><i
                        class="white-text fas fa-hands-helping"></i>Instituciones</a></li>
            <li class="side-nav-item" id="statistics"><a href="#" class="a-nav white-text waves-effect"><i
                        class="white-text fas fa-chart-pie"></i>Estadisticas</a></li>
            <li class="side-nav-item" id="cases">
                <ul class="collapsible collapsible-accordion">
                    <li class="active"><a class="collapsible-header a-nav white-text"><i
                                class="white-text fas fa-folder tiny"></i>Casos<i
                                class="right white-text fas fa-caret-right"></i></a>
                        <div class="collapsible-body blue-grey darken-2" style="display: block;">
                            <ul>
                                <li><a href="../dashboard/general-cases.php" class="cb-a waves-effect waves-send white-text">Generales</a></li>
                                <li id="asigned"><a href="#" class="cb-a waves-effect waves-send white-text">Asignaciones</a></li>
                                <li><a href="#" class="cb-a waves-effect waves-send white-text">Mis casos</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="side-nav-item" id="chat"><a href="#" class="a-nav white-text waves-effect"><i class="white-text fas fa-comments"></i>Chat</a></li>
        </ul>
    </div>
</div>

<script src="../../source/js/jquery-3.4.1.min.js"></script>
<script src="../../source/js/dashboard-js/side-nav.js"></script>