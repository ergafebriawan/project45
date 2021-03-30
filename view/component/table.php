<?php
require "../../core/query.php";

$query = new Query();
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">num</th>
            <th scope="col">time</th>
            <th scope="col">Suhu</th>
            <th scope="col">Kelembapan</th>
            <th scope="col">Curah Hujan</th>
            <th scope="col">Pompa Air</th>
            <th scope="col">Pompa pestisida</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($query->dataLog() as $d) {
        ?>
            <tr>
                <td><?php echo $d['id'];?></td>
                <td><?php echo $d['time'];?></td>
                <td><?php echo $d['sensor1'];?></td>
                <td><?php echo $d['sensor2'];?></td>
                <td><?php echo $d['sensor3'];?></td>
                <td><?php echo $d['output1'];?></td>
                <td><?php echo $d['output2'];?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>