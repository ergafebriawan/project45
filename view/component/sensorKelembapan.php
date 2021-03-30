<?php
require "../../core/component.php";
$make = new Component();
$data = $make->makeSensor('Sensor Humidity', 'sensor2', '%');

?>
<div class="col mb-4">
    <div class="card h-100">
        <div class="card-body mx-auto">
            <h5 class="card-title"><?= $data['title']; ?></h5>
            <h1 class="card-text d-flex justify-content-center"><?= $data['value']; ?></h1>
            <h4 class="card-text d-flex justify-content-center"><?= $data['unit'] ?></h4>
        </div>
    </div>
</div>