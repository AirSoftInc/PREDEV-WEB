<?php
    include('../../config/connection.php');

    $title = $_POST['title'];
    $date = $_POST['date'];
    $isCase = $_POST['isCase'];
    $link = $_POST['link'];
    $zone = $_POST['zone'];

    $queryCount = "SELECT * FROM zone WHERE name LIKE '%$zone%';";

    $countResult = mysqli_query($connection, $queryCount);
    $ids = mysqli_num_rows($countResult);

    if ($ids === 0) {
        die('Area does not exist');
    }

    while($row = mysqli_fetch_array($countResult)){
        $zone_id = $row['id'];
    }

    $queryCountLinks = "SELECT * FROM case_data WHERE link LIKE '%$link%' AND zone_id = $zone_id;";
    $linksResult = mysqli_query($connection, $queryCountLinks);
    $linksIds = mysqli_num_rows($linksResult);

    if ($linksIds > 0) {
        die('The link already exists');
    }

    $queryCaseData = "INSERT INTO case_data VALUES(DEFAULT, '$title', '$link', '$date', $isCase, $zone_id, DEFAULT, DEFAULT, DEFAULT);";
    $caseReult = mysqli_query($connection, $queryCaseData);

    if (!$caseReult) {
        die('ERROR' . mysqli_error($connection));
    }

    echo "SUCCES";
?>