$(document).ready(function () {

    const pageTitle = "INSTITUCIONES"

    onInit();
    
    function onInit() {
        document.getElementById("pageTitle").innerHTML = pageTitle;
        $("#institutions").addClass("active-green");
        getAllInstitutions();
    }

    function getAllInstitutions(){
        const userTypeForm = {type: "I", filter: false, operation: "getAllUsers"};
        retriveWithParams('../../service/user-service/user-controller.php',
        userTypeForm, function(response){
            console.log(JSON.parse(response));
        });
    }
});