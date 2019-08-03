$(document).ready(function () {

    const pageTitle = "CASOS GENERALES"

    onInit();
    
    function onInit() {
        document.getElementById("pageTitle").innerHTML = pageTitle;
        $("#cases").addClass("active-green");
    }
});