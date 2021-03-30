<?php
require "../plugin/login/session.php";

$title = "Result";
include "template\header.php";

include "../core/component.php";
$make = new Component();
$make->setComponent('chartSensor', 'chart');
$make->setComponent('table', 'table');
?>

<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <h3>Result</h3>
    </div>

    <div id="chartSensor"></div>
    <div id="table"></div>
</div>

<?php
include 'template\footer.php';
?>