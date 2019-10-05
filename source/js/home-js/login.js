$(document).ready(function () {
    
   $('#formLogin').submit(function (e) { 
       const email = $('#email').val();
       const password = $('#password').val();
       if (!!email && !!password) {
            const users = {
                email: email,
                password : password
            }   
            retriveWithParams('../service/login-service/login-controller.php', users, function(response){
                if (response != "ERROR 404") {
                    const user = JSON.parse(response)[0];
                    location.href="dashboard/index.php";
                    localStorage.setItem("user", JSON.stringify(user))
                }else{
                    $('#email').val("");
                    $('#password').val("");
                    $('#email').focus();
                    alertify.error("Credenciales invalidas");
                }
            })
       }else{
        $('#email').focus();
        alertify.error("Todos los campos son obligatorios");
        
       }
       
       e.preventDefault();
   }); 
   $('#cancel').submit(function(e){
        $('#email').val("");
        $('#password').val("");
   });
});