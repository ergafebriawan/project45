<?php
require "../plugin/login/session.php";

$title = "Home";
include "template\header.php";

include "../core/component.php";
$make = new Component();
$make->setComponent('sensorSuhu', 'sensorSuhu');
$make->setComponent('sensorHumidity', 'sensorKelembapan');
$make->setComponent('sensorCurahHujan', 'sensorRain');
$make->setComponent('pompaAir', 'pompaAir');
$make->setComponent('pompaPestisida', 'pompaPestisida');
?>


<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <h3> IOT Dashboard</h3>
    </div>

    <div class="row d-flex justify-content-center mt-4 mb-2">
        <h5>Sensors</h5>
    </div>
    
    <!-- add component sensor-->
    <div class="row row-cols-1 row-cols-md-3">
        <div id="sensorSuhu"></div>
        <div id="sensorHumidity"></div>
        <div id="sensorCurahHujan"></div>

    </div>

    <!-- add component output -->
    <div class="row d-flex justify-content-center mt-4 mb-2">
        <h5>Actuactors</h5>
    </div>
    <div class="row row-cols-1 row-cols-md-3">
        <div id="pompaAir"></div>
        <div id="pompaPestisida"></div>

    </div>

</div>

<?php
include 'template\footer.php';
?>