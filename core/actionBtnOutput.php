<?php
require "query.php";

$query = new Query();

$val = intval($_GET['val']);
$out = $_GET['out'];
$exec = $query->tombolOutput($out, $val);

if($exec){
    header('location: ../view/home.php');
}

?>