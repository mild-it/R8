<?php
include('connect.php');
$sql = "SELECT * FROM tesaban WHERE province={$_GET['tcode']} group by tcode";
$query = mysqli_query($conn, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);