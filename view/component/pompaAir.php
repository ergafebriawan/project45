<?php
require "../../core/component.php";
$make = new Component();
$data = $make->makeControl('Pompa Air', 'output1');

?>
<div class="col mb-4">
    <div class="card h-100">
        <div class="card-body mx-auto">
            <h5 class="card-title"><?= $data['title']; ?></h5>
            <p class="card-text d-flex justify-content-center">Kondisi <?= $data['condition']; ?></p>
            <?= $make->buttonControl($data['condition'], 'output1');?>
        </div>
    </div>
</div>