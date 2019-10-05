$(document).ready(function () {
    let user;
    onInit();

    function onInit() {
         user = JSON.parse(localStorage.getItem('user'));
        setUserData(user);
        setUserDataLabels(user);
    }

    function setUserData(user) {
        $('#name').val(user.name);
        $('#email').val(user.email);
        $('#telephone').val(user.telephone);
        $('#rfc').val(user.rfc);
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
        const userInstitutionForm = {
            name: !!$('#name').val() ? $("#name").val(): "",
            email: !!$('#email').val() ? $("#email").val(): "",
            rfc: !!$('#rfc').val() ? $("#rfc").val(): "",
            telephone: !!$('#telephone').val() ? $("#telephone").val(): "",
            password: !!$('#password').val() ? $('#password').val() : user.password
        }
        
        console.log(userInstitutionForm);
        
        e.preventDefault();
    });
});