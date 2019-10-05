$(document).ready(function () {
    $("#logout").click(function () {
        localStorage.clear();
        location.href="../index.php";
    });    
});
