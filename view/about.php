<?php
require "../plugin/login/session.php";

$title = "About";
include "template\header.php";

require "../core/data.php";
$device = new Data();
?>

<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <h3><?=$title?></h3>
    </div>

    <?=$device->setAbout()?>

</div>

<?php
include 'template\footer.php';
?>