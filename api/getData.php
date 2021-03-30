<?php 
require "../config/conf.php";
require "../config/query.php";

header('Content-Type: application/json');
$query = new Query();

$id = $_GET['id'];

if($id === null){
    $data = $query->getDevice();
}else{
    $data = $query->getDevice($id);
}

$res = [
    'message' => 'success',
    'num' => count($data),
    'result' => $data,
];

echo json_encode($res);

?>