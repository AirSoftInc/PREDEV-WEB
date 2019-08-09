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
            let users = JSON.parse(response);
            let template = '';
            users.forEach(user => {
                template += `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td><strong class="caseSelected">${user.email}</strong></td>
                        <td><strong class="caseSelected2">${user.webPage}</strong></td>
                        <td>${user.telephone}</td>
                        <td><strong id="caseSelected">${user.status != 1 ? "PENDIENTE" : "ACEPTADA"}</strong></td>
                        <td>
                            <a class="btn-floating green round-button" id="btnUpdate" target= blank
                            data-toggle="tooltip" data-placement="top" title="" userEmail="${user.email}" idUser="${user.id}"><i class="fas fa-check action-button"></i></a>                                    
                        </td>
                        <td>
                            <a class="btn-floating red round-button" href="#" id="btnDelete" target= blank
                            data-toggle="tooltip" data-placement="top" title="" idUser="${user.id}"><i class="fas fa-trash action-button"></i></a>
                        </td>
                    </tr>
                `;
            });

            $('#generalInstitutions').html(template);
        });
    }

    $(document).on('click', '#btnUpdate', function(){
        let email = $(this).attr('userEmail');
        let userID = $(this).attr('idUser');
        const userActive = {id: userID, email: email}
        postFormWithResponse("../../service/user-service/update-status-servie.php", userActive, function(response){
            Swal.fire({
                type: 'success',
                title: 'Solicitud Aceptada',
                showConfirmButton: false,
                timer: 1500
              })
            getAllInstitutions();
        });
    })

    $(document).on('click', '#btnDelete', function(){
        let id = $(this).attr('idUser');
    })
});