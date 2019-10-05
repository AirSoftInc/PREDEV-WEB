<?php
    include('../../config/connection.php');
    $operation = $_POST['operation']; 

    switch ($operation) {
        case $operation == "getAllCases":
            getAllCases($connection);
        break;
        case $operation == "delete-case":
            $title = $_POST['title'];
            deleteCase($title, $connection);
        break;
        case $operation == "get-by-caseId":
            $caseId = $_POST['caseId'];
            getCaseById($caseId, $connection);
        break;
        default:

        break;
    }

    function getAllCases($connection){
        $query = "SELECT * FROM case_data WHERE isCase = TRUE AND isDeleted = FALSE";
        $result = mysqli_query($connection, $query);
    
        if (!$result) {
            die('Query failed' . mysqli_error($connection));
        }
    
        $json = array();
    
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'id' => $row['id'],
                'title' => $row['title'],
                'link' => $row['link'],
                'status' => $row['status'],
                'date' => $row['date'],
                'isAssigned' => $row['isAssigned'],
                'zoneID' => $row['zone_id']
            );
        }
    
        $jsonString = json_encode($json);
        echo $jsonString;
    }

    function deleteCase($title, $connection){
        $query = "UPDATE case_data SET isDeleted = TRUE WHERE title = '$title';";
        $result = mysqli_query($connection, $query);
    
        if (!$result) {
            die('Query failed' . mysqli_error($connection));
        }

        echo "SUCCESS";
    }

    function getCaseById($id, $connection){
        if (isset($id)) {
            $query = "SELECT * FROM case_data WHERE id = $id;";
            $result = mysqli_query($connection, $query);
    
            if (!$result) {
               die('Query failed' . mysqli_error($connection));
            }
    
            while($row = mysqli_fetch_array($result)){
                $case = new stdClass();
                $case->id = $row['id'];
                $case->title = $row['title'];
                $case->link = $row['link'];
                $case->status = $row['status'];
                $case->date = $row['date'];
                $case->isAssigned = $row['isAssigned'];
            }
    
            $jsonString = json_encode($case);
            echo $jsonString;
        }
    }
?>