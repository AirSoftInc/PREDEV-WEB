
<?php
    include('../../config/connection.php');
    $password = "";
    function password_random($length){
    $charset = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $password = "";
    for($i=0; $i<$length; $i++){
        $rand = rand() % strlen($charset);
        $password .= substr($charset, $rand, 1);
    }
    return $password;
    }
    $new_password = password_random(10);
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $email = $_POST['email'];
    }
    $query = "UPDATE users SET password = '$new_password', status = true  WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed');
    }
    echo "Ok";
    $to = $email;
    $title = 'Aceptación de PREDEV';
    $mensage = '
    <html>
    <head>
    <title>¡Gracias por unirte a la lucha contra la discriminación!</title>
    </head>
    <body style="background-color: grey">
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
    <td style="background-color: #ecf0f1">
        <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
            <h2 style="color: #e67e22; margin: 0 0 7px">Bienvenido a PREDEV</h2>
            <p style="margin: 2px; font-size: 15px">
                Somos una comunidad que lucha en contra de la discriminación de todo tipo en el estado de Veracruz.<br>
                Sabemos que la lucha contra la discriminación es algo complicado para todos, pero si unimos nuestros esfuezos lograremos hacer de nuestro estado un lugar mejor, en el cual viviremos libres de discriminación, sin sentirno ofendidos por los demás.<br>
                Principales actividades de PREDEV:</p>
            <ul style="font-size: 15px;  margin: 10px 0">
                <li>Registro de casos de discriminación.</li>
                <li>Estadísticas en el estado de Veracruz.</li>
                <li>Participación ciudadana.</li>
            </ul>
            <p><h2>Tu contraseña temporal es: ';$mensage .= $new_password; $mensage .=' </h2></p>
            <div style="width: 100%; text-align: center">
                <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db" href="google.com">Ir a la página</a>	
            </div>
            <p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">PREDEV 2019</p>
        </div>
    </td>
    </tr>
    </table>
    </body>
    </html>
    ';
    $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: 12839@utcv.edu.mx.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
   
    mail($to, $title, $mensage, $headers);
?>