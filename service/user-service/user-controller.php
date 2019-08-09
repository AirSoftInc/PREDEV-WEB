<?php 
    // include('../../config/connection.php');

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
            $zipCode, $municipality, $webPage, $facebook, $twitter);
        break;
        default:
            echo "ERROR 404";
        break;
    }

    function registerUser($name, $lastName, $surname, $email, $userType, $description, $rfc, $telephone, $address, $city, 
        $zipCode, $municipality, $webPage, $facebook, $twitter){

        include('../../config/connection.php');

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
?>