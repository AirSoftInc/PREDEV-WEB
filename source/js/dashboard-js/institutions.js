$(document).ready(function () {

    const pageTitle = "INSTITUCIONES"

    onInit();
    
    function onInit() {
        document.getElementById("pageTitle").innerHTML = pageTitle;
        $("#institutions").addClass("active-green");
    }
});