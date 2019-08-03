function getEmailonly(){
    const emailOnly =  `
        <div class="input-field col s12">
            <i class="fas fa-envelope prefix position-icon"></i>
            <input id="email" type="text">
            <label for="icon_prefix">Correo Electrónico</label>
        </div>
    `;

    return  emailOnly;
}

function getEmailAndRfc() {
    const emailAndRfc = `
        <div class="input-field col s6">
            <i class="fas fa-envelope prefix position-icon"></i>
            <input id="email" type="text">
            <label for="icon_prefix">Correo Electrónico</label>
        </div>

        <div class="input-field col s6">
            <i class="fas fa-key prefix position-icon"></i>
            <input id="surname" type="text">
            <label for="icon_prefix">RFC</label>
        </div>
    `;

    return emailAndRfc;
}

function address() {
    const address = `
        <div class="input-field col s12">
            <i class="fas fa-map-marker-alt prefix position-icon"></i>
            <input id="address" type="text">
            <label for="icon_prefix">Dirección</label>
        </div>
    `;

    return address;
}


function aditionalInfo() {
    const aditionalInfo = `
        <div class="col s12">
            <h3 style="font-size: 25px;" class="title" id="divider-bold">INFORMACIÓN ADICIONAL</h3>
        </div>
        <div class="divider col s12" id="divider-register"></div>

        <div class="row">
            <div class="input-field col s6">
                <i class="fas fa-phone prefix position-icon"></i>
                <input id="telephone" type="text">
                <label for="icon_prefix">Teléfono</label>
            </div>

            <div class="input-field col s6">
                <i class="fab fa-facebook-square prefix position-icon"></i>
                <input id="facebook" type="text">
                <label for="icon_prefix">Facebook</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <i class="fab fa-twitter prefix position-icon"></i>
                <input id="twitter" type="text">
                <label for="icon_prefix">Twitter</label>
            </div>

            <div class="input-field col s6">
                <i class="fas fa-globe prefix position-icon"></i>
                <input id="webpage" type="text">
                <label for="icon_prefix">Página Web</label>
            </div>
        </div>

        <div class="input-field col s12">
            <i class="fas fa-edit prefix position-icon"></i>
            <textarea id="description" class="materialize-textarea"></textarea>
            <label for="textarea1">Descripción</label>
        </div>
    `;
    
    return aditionalInfo;
}

function getLastNames() {
    const lastNames = `
        <div class="input-field col s6">
            <i class="fas fa-user prefix position-icon"></i>
            <input id="lastname" type="text">
            <label for="icon_prefix">Primer Apellido</label>
        </div>

        <div class="input-field col s6">
            <i class="fas fa-user prefix position-icon"></i>
            <input id="surname" type="text">
            <label for="icon_prefix">Segundo Apellido</label>
        </div>
    `;
    
    return lastNames;
}