<?php 
    include('../../config/connection.php');

    $operation = $_POST['operation'];

    switch ($operation) {
        case $operation == 'register-user':
            $name = $_POST['name'];
            $lastName = $_POST['lastName'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $userType = $_POST['userType'];
            $description = $_POST['description'];
            $rfc = $_POST['rfc'];
            $telephone = $_POST['telephone'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $zipCode = $_POST['zipCode'];
            $municipality = $_POST['municipality'];
            $webPage = $_POST['webPage'];
            $facebook = $_POST['facebook'];
            $twitter = $_POST['twitter'];

            registerUser($name, $lastName, $surname, $email, $userType, $description, $rfc, $telephone, $address, $city, 
            $zipCode, $municipality, $webPage, $facebook, $twitter, $connection);
        break;
        case $operation == "getAllUsers":
            $type = $_POST['type'];
            $filter = $_POST['filter'];

            getAllUsers($type, $filter, $connection);
        break;
        default:
            echo "ERROR 404";
        break;
    }

    function registerUser($name, $lastName, $surname, $email, $userType, $description, $rfc, $telephone, $address, $city, 
        $zipCode, $municipality, $webPage, $facebook, $twitter, $connection){

        $queryCount = "SELECT * FROM users WHERE email = '$email';";
        $countResult = mysqli_query($connection, $queryCount);
        $ids = mysqli_num_rows($countResult);

        if ($ids > 0) {
            die('EXIST');
        }
    
        $queryUser = "INSERT INTO users (name, last_name, surname, email, user_type, status) VALUES ('$name', '$lastName', '$surname', '$email', '$userType', false);";
        $userResult = mysqli_query($connection, $queryUser);
    
        if (!$userResult) {
            die('INSTITUTION-USER' . mysqli_error($connection));
        }
    
        $userSearch = "SELECT * FROM users WHERE email = '$email';";
        $userSearchResult = mysqli_query($connection, $userSearch);
    
        while ($row = mysqli_fetch_array($userSearchResult)) {
            $id = $row['id'];
        }
    
        $queryUserInfo = "INSERT INTO user_aditional_info VALUES(DEFAULT, $id, '$description', '$rfc', '$telephone', '$address', '$city', '$zipCode', '$municipality', '$webPage', '$facebook', '$twitter','test/img/img.png');";
        $userResultInfo = mysqli_query($connection, $queryUserInfo);
    
        if (!$userResultInfo) {
            $queryDeleteUser = "DELETE FROM users WHERE  id = $id";
            $deleteResult = mysqli_query($connection, $queryDeleteUser);
            die('INSTITUTION-USER-INFO' . mysqli_error($connection));
        }
    
        echo "SUCCESS";
    }

    function getAllUsers($type, $filter, $connection){
        if (isset($type)) {
            if ( $filter == "true") {
                $query = "SELECT u.id, u.name, u.last_name, u.surname, u.email, u.user_type, u.status, ai.rfc, ai.telephone, ai.address, ai.zip_code, ai.municipality,
                ai.web_page FROM users u, user_aditional_info ai WHERE u.id = ai.user_id && user_type = '$type' && status = 1";
                $result = mysqli_query($connection, $query);
            } else {
                $query = "SELECT u.id, u.name, u.last_name, u.surname, u.email, u.user_type, u.status, ai.rfc, ai.telephone, ai.address, ai.zip_code, ai.municipality,
                ai.web_page FROM users u, user_aditional_info ai WHERE u.id = ai.user_id && user_type = '$type'";
                $result = mysqli_query($connection, $query);
            }
    
            if (!$result) {
                die('Query failed' . mysqli_error($connection));
            }
        
            $json = array();
        
            while($row = mysqli_fetch_array($result)){
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
                    'webPage' => $row['web_page']
                );
            }
        
            $jsonString = json_encode($json);
            echo $jsonString;
        }
    }
?>