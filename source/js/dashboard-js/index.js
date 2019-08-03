$(document).ready(function () {

    const pageTitle = "PANEL DE ADMINISTRADOR"
    
    onInit();

    function onInit(){
        document.getElementById("pageTitle").innerHTML = pageTitle;
        $("#home").addClass("active-green");
    }
});