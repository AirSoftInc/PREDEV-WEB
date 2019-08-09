$(document).ready(function () {

    const pageTitle = "CASOS GENERALES"

    onInit();
    
    function onInit() {
        document.getElementById("pageTitle").innerHTML = pageTitle;
        $("#cases").addClass("active-green");
        getAllCases();
    }

    function getAllCases(){
        const form = {operation: "getAllCases"}
        postFormWithResponse("../../service/cases-service/cases-service.php", form ,function(response){
            const cases = JSON.parse(response);
            let template = '';
            cases.forEach(caseSelected => {
                const assignedClass = caseSelected.isAssigned === "Sin asignar" ? "color: #e40059 !important;" : "assigned";
                template += `
                <tr>
                    <td>${caseSelected.title}</td>
                    <td>${caseSelected.date}</td>
                    <td><strong class="caseSelected">${caseSelected.status}</strong></td>
                    <td><strong id="caseSelected">${caseSelected.isAssigned}</strong></td>
                    <td>
                        <a class="btn-floating blue round-button tooltipped" href="${caseSelected.link}" id="btnInfo" target= blank
                        data-placement="top" data-tooltip="Más información"><i class="fas fa-info action-button"></i></a>
                        
                        <a class="btn-floating yellow round-button tooltipped" href="#" id="btnUpdate" target= blank
                        data-placement="top" data-tooltip="Editar caso" caseID="${caseSelected.id}"><i class="fas fa-paint-brush action-button"></i></a>
                        
                        <button class="btn-floating red round-button tooltipped" id="btnDelete" target= blank
                        data-placement="top" data-tooltip="Eliminar caso" caseID="${caseSelected.id}"><i class="fas fa-trash button-trash"></i></button>
                        
                        <a class="btn-floating green round-button tooltipped" href="#" id="btnUserChange" target= blank
                        data-placement="top" data-tooltip="Reasignar caso" caseID="${caseSelected.id}"><i class="fas fa-users action-button"></i></a>
                    </td>
                </tr>
                `;
            });

            $('#generalCases').html(template);
        });
    }

    $(document).on('click', '#btnDelete', function () {
        const id = $(this).attr('caseID');

        Swal.fire({
            title: '¿Estas seguro?',
            text: "De querer eliminar este caso",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            cancelButtonText: "Cancelar"
          }).then((result) => {
            if (result.value) {
                const formId = {caseId: id, operation: "get-by-caseId"}
                postFormWithResponse("../../service/cases-service/cases-service.php", formId, function(response){
                    const foundCase = JSON.parse(response);             
                    const form = {operation: "delete-case", title: foundCase.title}
                    postFormWithResponse("../../service/cases-service/cases-service.php", form, function (response){
                        getAllCases();  
                        if (response === "SUCCESS") {
                            Swal.fire(
                                'Eliminado',
                                'El caso ah sido eliminado correctamente',
                                'success'
                            )
                        }
                    });
                });
            }
        })
    });
});