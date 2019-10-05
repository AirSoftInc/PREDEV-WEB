$(document).ready(function () {
    let user;
    onInit();

    function onInit() {        
        user = JSON.parse(localStorage.getItem('user'));
        if (!!user) {
            setUserData(user);
            setUserDataLabels(user); 
        } else {
            location.href="../login.php";
        }
    }

    function setUserData(user) {
        $('#name').val(user.name);
        $('#email').val(user.email);
        $('#telephone').val(user.telephone);
        $('#rfc').val(user.rfc);
    }

    function clearData() {
        $('#name').val("");
        $('#email').val("");
        $('#telephone').val("");
        $('#rfc').val("");
    }

    function setUserDataLabels(user) {
        document.getElementById("list").innerHTML = `
        <li>Nombre: <span class="color-red">${user.name}</sapan></li>
        <li>Correo: <span class="color-red">${user.email}</span></li>
        <li>Telefono: <span class="color-red">${user.telephone}</span></li>
        <li>RFC: <span class="color-red">${user.rfc}</span></li>
        `;
    }


    $('#userEditForm').submit(function (e) {
        Swal.fire({
            title: '¿Desea continuar con los cambios?',
            text: "cambios de mi perfil",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuar',
            cancelButtonText: "Cancelar"
          }).then((result) => {
            if (result.value) {
                const userInstitutionForm = {
                    id: user.id,
                    name: !!$('#name').val() ? $("#name").val(): "",
                    email: !!$('#email').val() ? $("#email").val(): "",
                    rfc: !!$('#rfc').val() ? $("#rfc").val(): "",
                    telephone: !!$('#telephone').val() ? $("#telephone").val(): "",
                    password: !!$('#password').val() ? $('#password').val() : user.password, 
                    operation: 'edit-profile-user'
                }

                postFormWithResponse("../../service/user-service/user-controller.php", userInstitutionForm, function (response) {
                    const user = JSON.parse(response)[0];
                    console.log(JSON.parse(response)[0]);
                    clearData();
                    localStorage.clear();
                    localStorage.setItem('user', JSON.stringify(user));
                    setUserData(user);
                    setUserDataLabels(user);
                    Swal.fire({
                        title: 'Se actualizo correctamente tu información.',
                        animation: false,
                        customClass: {
                          popup: 'animated zoomInDown'
                        }
                      })
                });
            }else{
                setUserData(user);
                setUserDataLabels(user);
            }
        })
        
        e.preventDefault();
    }); 
});