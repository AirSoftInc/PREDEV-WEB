<?php 
    include("../../config/connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT name, user_type FROM `users` WHERE email = '$email' AND password = '$password'";
    $countResult = mysqli_query($connection, $sql);
    $results = mysqli_num_rows($countResult);

    if ($results == 1) {
        echo('SUCCESS');
    }else{
        echo('ERROR 404');
    }
    
?>