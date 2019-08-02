<head>
    <link rel="stylesheet" href="../source/css/home-css/register-modal.css">
</head>

<div id="register-modal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h5 class="pl-10" id="divider-bold">INFORMACIÓN DE LA CUENTA</h5>
        <div class="divider" id="divider-register"></div>
        <br>

        <form class="col s12">
            <div class="row">
                <div class="row">
                    <div class="input-field col s5">
                        <select  id="userType" name="userType"> 
                            <option value="" disabled selected>Selecciona tu tipo de usuario</option>
                            <option value="I">Institución</option>
                            <option value="U">Usuario PREDEV</option>
                        </select>
                        <label>Tipo de Usuario</label>
                    </div>

                    <div class="input-field col s7">
                        <i class="fas fa-user prefix position-icon"></i>
                        <input id="name" type="text" class="validate test">
                        <label for="icon_prefix">Nombre(s)</label>
                    </div>
                </div>

                <div class="input-field col s6">
                    <i class="fas fa-user prefix position-icon"></i>
                    <input id="lastname" type="text" class="validate test">
                    <label for="icon_prefix">Primer Apellido</label>
                </div>

                <div class="input-field col s6">
                    <i class="fas fa-user prefix position-icon"></i>
                    <input id="surname" type="text" class="validate test">
                    <label for="icon_prefix">Segundo Apellido</label>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="fas fa-envelope prefix position-icon"></i>
                        <input id="email" type="text" class="validate test">
                        <label for="icon_prefix">Correo Electrónico</label>
                    </div>
                </div>

                <div class="col s12">
                    <h3 style="font-size: 25px;" class="title" id="divider-bold">UBICACIÓN</h3>
                </div>
                <div class="divider col s12" id="divider-register"></div>
                
                <div class="input-field col s12">
                    <i class="fas fa-map-marker-alt prefix position-icon"></i>
                    <input id="address" type="text" class="validate test">
                    <label for="icon_prefix">Dirección</label>
                </div>

                <div class="input-field col s6">
                    <i class="fas fa-city prefix position-icon"></i>
                    <input id="city" type="text" class="validate test">
                    <label for="icon_prefix">Ciudad</label>
                </div>

                <div class="input-field col s6">
                    <i class="fas fa-envelope prefix position-icon"></i>
                    <input id="zipcode" type="text" class="validate test">
                    <label for="icon_prefix">Código Postal</label>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="fas fa-city prefix position-icon"></i>
                        <input id="municipality" type="text" class="validate test">
                        <label for="icon_prefix">Municipio</label>
                    </div>
                </div>
                <div id="aditionalInfo"></div>
                <div class="col s12">
                    <h3 style="font-size: 25px;" class="title" id="divider-bold">INFORMACIÓN ADICIONAL</h3>
                </div>
                <div class="divider col s12" id="divider-register"></div>

                <div class="input-field col s6">
                    <i class="fas fa-phone prefix position-icon"></i>
                    <input id="telephone" type="text" class="validate test">
                    <label for="icon_prefix">Teléfono</label>
                </div>

                <div class="input-field col s6">
                    <i class="fab fa-facebook-square prefix position-icon"></i>
                    <input id="facebook" type="text" class="validate test">
                    <label for="icon_prefix">Facebook</label>
                </div>

                <div class="input-field col s6">
                    <i class="fab fa-twitter prefix position-icon"></i>
                    <input id="twitter" type="text" class="validate test">
                    <label for="icon_prefix">Twitter</label>
                </div>

                <div class="input-field col s6">
                    <i class="fab fa-battle-net prefix position-icon"></i>
                    <input id="webpage" type="text" class="validate test">
                    <label for="icon_prefix">Página Web</label>
                </div>

                <div class="input-field col s12">
                    <textarea id="description" class="materialize-textarea"></textarea>
                    <label for="textarea1">Descripción</label>
                </div>

            </div>
        </form>
    </div>

    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Registrarse</a>
    </div>
</div>

<script src="../source/js/jquery-3.4.1.min.js"></script>
<script src="../source/js/home-js/register-modal.js"></script>