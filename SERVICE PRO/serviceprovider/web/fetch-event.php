<?php
    require_once "db.php";
    require_once "../login/login.php";


    $t_id=$_SESSION['t_id']; 
    $json = array();
    $sqlQuery = "SELECT * FROM tbl_events where t_id=$t_id";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($eventArray);
?>