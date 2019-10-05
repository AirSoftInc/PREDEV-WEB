<?php 
    include("../../config/connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql =  "SELECT u.id, u.name, u.last_name, u.surname, u.email, u.password, u.user_type, u.status, ai.rfc, ai.telephone, ai.address, ai.zip_code, ai.municipality,
    ai.web_page FROM users u, user_aditional_info ai WHERE u.id = ai.user_id && user_type = 'I' && STATUS = 1 && u.email = '$email' && u.password = '$password';";

    $countResult = mysqli_query($connection, $sql);
    $results = mysqli_num_rows($countResult);

    if ($results == 1) {
        $json = array();        
        while($row = mysqli_fetch_array($countResult)){
            $json[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'user_type' => $row['user_type'],
                'status' => $row['status'],
                'lasName' => $row['last_name'],
                'surname' => $row['surname'],
                'telephone' => $row['telephone'],
                'address' => $row['address'],
                'municipality' => $row['municipality'],
                'webPage' => $row['web_page'],
                'rfc' => $row['rfc'],
                'password' => $row['password'],
                'statusRequest' => 'SUCCESS'
            );
        };

        $jsonString = json_encode($json);
        echo $jsonString;
    }else{
        echo('ERROR 404');
    }
    
?>