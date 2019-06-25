const template = document.createElement('template')
template.innerHTML = `
    <link rel="stylesheet" href="../source/css/materialize.min.css">
    <link rel="stylesheet" href="../source/css/predev.css">

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <img src="../source/img/PREDEV.png" height="50" width="150">
                    <p class="font-color-gray">
                        PREDEV Es una plataforma para la monitorización y prevención de la discriminación del estado de Veracruz.
                    </p>
                    <div class="divider"></div>
                    <div class="pt-5"><strong class="text-footer-item">UNETE A </strong><strong class="text-footer-item font-color-green">NOSOTROS</strong></div>
                </div>

                <div class="col s4">

                </div>

                <div class="col s4">

                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Copyright Todos los derechos reservados por AirSoft.
                <a class="grey-text text-lighten-4 right" href="#!">Contactanos</a>
            </div>
        </div>
    </footer>
`

class PlaceholderKitten extends HTMLElement {
    constructor() {
        super()
        this.attachShadow({ mode: 'open' })
        this.shadowRoot.appendChild(template.content.cloneNode(true))
    }
}

window.customElements.define('placeholder-kitten', PlaceholderKitten)