$(document).ready(function() {

  onInit();

  function onInit() {
    $('select').material_select();
    userTypeCheck("U") 
  }

  $("#userType").change(function () {
    const userType = document.getElementById("userType").value;
    userTypeCheck(userType);
  });

  function userTypeCheck(userType) {
    switch (userType) {
      case "U":
        document.getElementById("emailAndRfc").innerHTML = getEmailonly();
        document.getElementById("lastName").innerHTML = getLastNames();
        document.getElementById("inputAddress").innerHTML = "";
        document.getElementById("aditionalInfo").innerHTML = "";
        $("#emailAndRfc").removeClass("mt-40");
      break;
      case "I":
          document.getElementById("emailAndRfc").innerHTML = getEmailAndRfc();
          document.getElementById("inputAddress").innerHTML = address();
          document.getElementById("aditionalInfo").innerHTML = aditionalInfo();
          document.getElementById("lastName").innerHTML = "";
          $("#emailAndRfc").addClass("mt-40");
      break;
    }
  }

  $('#user-form').submit(function (e){
    const userType = $('#userType').val();
      if (!!userType) {
        const userInstitutionForm = {
          name: !!$('#name').val() ? $("#name").val(): "",
          lastName: !!$('#lastName').val() ? $("#lastName").val(): "",
          surname: !!$('#surname').val() ? $("#surname").val(): "",
          email: !!$('#email').val() ? $("#email").val(): "",
          userType: !!$('#userType').val() ? $("#userType").val(): "",
          description: !!$('#description').val() ? $("#description").val(): "",
          rfc: !!$('#rfc').val() ? $("#rfc").val(): "",
          telephone: !!$('#telephone').val() ? $("#telephone").val(): "",
          address: !!$('#address').val() ? $("#address").val(): "",
          city: !!$('#city').val() ? $("#city").val(): "",
          zipCode: !!$('#zipCode').val() ? $("#zipCode").val(): "",
          municipality: $('#municipality').val() ? $("#municipality").val(): "",
          webPage: !!$('#webPage').val() ? $('#webPage').val() : "",
          facebook: !!$('#facebook').val() ? $('#facebook').val() : "",
          twitter: !!$('#twitter').val() ? $('#twitter').val() : "",
          operation: "register-user"
      } 
    
      postFormWithResponse("../service/user-service/user-controller.php", userInstitutionForm, function (respose) {
        if (respose === "SUCCESS") {
          if (userType === "I") {
            Swal.fire({
              title: 'Su registro ha concluido con exito, se le analizara tu información y se te enviara una contraseña provisional por correo.',
              animation: false,
              customClass: {
                popup: 'animated zoomInDown'
              }
            }) 
          }else{
            Swal.fire({
              title: 'Su registro ha concluido con exito, se te enviara una contraseña provisional por correo.',
              animation: false,
              customClass: {
                popup: 'animated zoomInDown'
              }
            }) 
          } 
        }else if (respose === "EXIST"){
          Swal.fire({
            title: 'El correo ya pertenece a un usuario PREDEV prueba con otro.',
            animation: false,
            customClass: {
              popup: 'animated zoomInDown'
            }
          }) 
        }else{
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Ocurrio un error en el servidor',
            footer: '<a href>Contacte al administrador</a>'
          })
        }
      }); 

    } else {
      alertify.log('Selecciona un tipo de usuario');
    }
    e.preventDefault();
  });


  $("#cancelForm").click(function () {
    $('#register-modal').modal('close');
      document.getElementById("name").value = "";
      document.getElementById("lastName").value = "";
      document.getElementById("surname").value = "";
      document.getElementById("email").value = "";
      document.getElementById("city").value = "";
      document.getElementById("zipCode").value = "";
      document.getElementById("municipality").value = "";
      if (document.getElementById("userType").value == "I") {
          document.getElementById("description").value = "";
          document.getElementById("rfc").value = "";
          document.getElementById("telephone").value = "";
          document.getElementById("address").value = "";
          document.getElementById("webPage").value = "";
          document.getElementById("facebook").value = "";
          document.getElementById("twitter").value = "";
      }
  });
});