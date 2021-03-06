<head>
    <link rel="stylesheet" href="../source/css/home-css/register-modal.css">
    <link rel="stylesheet" href="../source/css/alertify.core.css">
    <link rel="stylesheet" href="../source/css/alertify.default.css">
    <link rel="stylesheet" href="../source/css/animate.css">
</head>

<div id="register-modal" class="modal">
    <div class="modal-content">
        <h5 class="pl-10 divider-bold" id="">INFORMACIÓN DE LA CUENTA</h5>
        <div class="divider divider-register" id=""></div>
        <br>

        <form class="col s12" id="user-form">
            <div class="row">
                <div class="row">
                    <div class="input-field col s5 m-17">
                        <select  id="userType" name="userType"> 
                            <option value="" disabled selected>Selecciona tu tipo de usuario</option>
                            <option value="I">Institución</option>
                            <option value="U">Usuario PREDEV</option>
                        </select>
                        <label>Tipo de Usuario</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="fas fa-user prefix position-icon"></i>
                        <input id="name" type="text" onblur="validateAlphanumeric(this.value, 'nombre')">
                        <label for="icon_prefix">Nombre(s)</label>
                    </div>
                </div>

                <div class="row" id="lastName"></div>

                <div class="row" id="emailAndRfc"></div>

                <div class="col s12">
                    <h3 style="font-size: 25px;" class="title divider-bold" id="">UBICACIÓN</h3>
                </div>
                <div class="divider col s12 divider-register" id=""></div>
                                
                <div class="row">
                    <div class="input-field col s4">
                        <i class="fas fa-city prefix position-icon"></i>
                        <input id="city" type="text" onblur="validateAlphanumeric(this.value, 'ciudad')">
                        <label for="icon_prefix">Ciudad</label>
                    </div>

                    <div class="input-field col s4">
                        <i class="fas fa-city prefix position-icon"></i>
                        <input id="municipality" type="text" onblur="validateAlphanumeric(this.value, 'municipio')">
                        <label for="icon_prefix">Municipio</label>
                    </div>

                    <div class="input-field col s4">
                        <i class="fas fa-envelope prefix position-icon"></i>
                        <input id="zipCode" type="text" onblur="validateZipCode(this.value, 'codigo postal')">
                        <label for="icon_prefix">Código Postal</label>
                    </div>
                </div>

                <div id="inputAddress"></div>

                <div id="aditionalInfo"></div>
            </div>

            <div class="row">
                <div>
                    <button type="submit" id="btnSave" class="waves-effect waves-light btn right border-radius color-green-button">Registrar</button>
                </div>
                <div class="right space-in-buttons">E</div>
                <div>
                    <a id="cancelForm" class="waves-effect waves-light btn right red border-radius">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../source/js/jquery-3.4.1.min.js"></script>
<script src="../source/js/home-js/register-modal.js"></script>
<script src="../source/js/alertify.min.js"></script>
<script src="../source/js/sweetalert2.js"></script>
<script src="../source/helper/register-modal-inputs.js"></script>
<script src="../source/helper/crud-function-service.js"></script>
<script src="../source/helper/validator.js"></script>