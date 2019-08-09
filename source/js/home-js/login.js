$(document).ready(function () {
    
   $('#formLogin').submit(function (e) { 
       const email = $('#email').val();
       const password = $('#password').val();
       if (!!email && !!password) {
            const users = {
                email: email,
                password : password
            }   
            console.log(users);
            
            retriveWithParams('../service/login-service/login-controller.php', users, function(response){
                console.log(response);
                if (response === 'SUCCESS') {
                    location.href="dashboard/index.php";
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