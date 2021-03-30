<?php
require "../config/conf.php";
require "../config/query.php";
header('Content-Type: application/json');
$query = new Query();

$id = $_GET['id'];
$sensor1 = $_GET['sen1'];
$sensor2 = $_GET['sen2'];
$sensor3 = $_GET['sen3'];
$output1 = $_GET['out1'];
$output2 = $_GET['out2'];

$exec = $query->updateDevice($id, $sensor1, $sensor2, $sensor3, $output1, $output2);
$exec2 = $query->logData($sensor1, $sensor2, $sensor3, $output1, $output2);
$num = mysqli_num_rows($query->getData('device',$id));

$response = array();

if ($num > 0) {
    if ($exec && $exec2) {
        $response['code'] = '200';
        $response['message'] = 'Updated Success';
    } else {
        $response['code'] = '400';
        $response['message'] = 'Update Failed';
    }
} else {
    $response['code'] = '404';
    $response['message'] = 'No data Selected';
}

echo json_encode($response);
