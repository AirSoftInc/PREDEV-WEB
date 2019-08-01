<head>
    <link rel="stylesheet" href="../source/css/home-css/register-modal.css">
</head>

<div id="register-modal" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h5 class="pl-10">Información de la cuenta</h5>
        <div class="divider"></div>
        <br>

        <form class="col s12">
            <div class="row">

                <div class="input-field col s4">
                    <select>
                        <option value="" disabled selected>Selecciona tu tipo de usuario</option>
                        <option value="I">Institución</option>
                        <option value="U">Usuario PREDEV</option>
                    </select>
                    <label>Materialize Select</label>
                </div>

                <div class="input-field col s4">
                    <i class="fas fa-phone-alt prefix position-icon"></i>
                    <input id="icon_prefix" type="text" class="validate test">
                    <label for="icon_prefix">First Name</label>
                </div>

                <div class="input-field col s4">
                    <i class="fas fa-phone-alt prefix position-icon"></i>
                    <input id="icon_prefix" type="text" class="validate test">
                    <label for="icon_prefix">First Name</label>
                </div>

            </div>
        </form>
    </div>

    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<script src="../source/js/jquery-3.4.1.min.js"></script>
<script src="../source/js/home-js/register-modal.js"></script>