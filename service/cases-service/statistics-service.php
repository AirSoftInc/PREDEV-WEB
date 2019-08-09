<?php
    include('../../config/connection.php');

    $zone = $_POST['zone'];

    switch ($zone) {
        case $zone == "HUASTECA ALTA":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 1;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "HUASTECA BAJA":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 2;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "TOTONACA":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 3;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "NAUTLA":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 4;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "CAPITAL":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 5;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "LAS MONTANAS":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 6;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "SOTAVENTO":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 7;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "PAPALOAPAN":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 8;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "LOS TUXTLA":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 9;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        case $zone == "OLMECA":
            $query = "SELECT COUNT(*) as Huasteca_Alta FROM case_data WHERE zone_id = 10;";
            $result = mysqli_query($connection, $query);
            $r = $result->fetch_row();
            echo $r[0];
        break;

        default:
            echo "Error";
        break;
    }
?>