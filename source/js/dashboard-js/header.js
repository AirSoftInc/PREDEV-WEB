$(document).ready(function () {
    onInit();

    function onInit() {
        const user = JSON.parse(localStorage.getItem("user"));
        document.getElementById("avatar").innerHTML = `<img src="../../source/img/profile.jpg" class="profile-img-size tooltipped" data-position="button" data-tooltip="${user.name}" data-delay="50">`;
    }

    $("#logout").click(function () {
        localStorage.clear();
        location.href="../index.php";
    });    
});
