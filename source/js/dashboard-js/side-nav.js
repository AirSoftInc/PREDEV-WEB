$(document).ready(function () {
    onInit();

    function onInit(params) {
        const user = JSON.parse(localStorage.getItem('user'))

        if (!!user && user.user_type === "I") {
            document.getElementById("institutions").style.display = "none";
            document.getElementById("asigned").style.display = "none";
            document.getElementById("chat").style.display = "none";
        }
    }
});