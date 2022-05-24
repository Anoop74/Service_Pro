<?php
require_once "../login/login.php";
require_once "db.php";

$t_id=$_SESSION['t_id']; 
$title = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";

$sqlInsert = "INSERT INTO tbl_events (t_id,title,start,end) VALUES ('".$t_id."','".$title."','".$start."','".$end ."')";

$result = mysqli_query($conn, $sqlInsert);

print_r($result);

if (! $result) {
    $result = mysqli_error($conn);
}
?>