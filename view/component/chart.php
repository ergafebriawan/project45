<?php
require "../../core/query.php";

$query = new Query();

$log_time = $query->getColumn('time');
$log_sensor1 = $query->getColumn('sensor1');
$log_sensor2 = $query->getColumn('sensor2');
$log_sensor3 = $query->getColumn('sensor3');

?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Grafik IOT</h3>
    </div>

    <div class="panel-body">
        <canvas id="myChart"></canvas>
        <script>
            var canvas = document.getElementById('myChart');
            var data = {
                labels: [<?php while ($b = mysqli_fetch_array($log_time)) {
                                echo '"' . $b['time'] . '",';
                            } ?>],
                datasets: [{
                        label: "Sensor1",
                        fill: true,
                        lineTension: 0.1,
                        backgroundColor: "rgba(105, 0, 132, .2)",
                        borderColor: "rgba(200, 99, 132, .7)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(200, 99, 132, .7)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(200, 99, 132, .7)",
                        pointHoverBorderColor: "rgba(200, 99, 132, .7)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 5,
                        pointHitRadius: 10,
                        data: [<?php while ($b = mysqli_fetch_array($log_sensor1)) {
                                    echo  $b['sensor1'] . ',';
                                } ?>],
                    },
                    {
                        label: "Sensor2",
                        fill: true,
                        lineTension: 0.1,
                        backgroundColor: "rgba(0, 137, 132, .2)",
                        borderColor: "rgba(0, 10, 130, .7)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(0, 10, 130, .7)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(0, 10, 130, .7)",
                        pointHoverBorderColor: "rgba(0, 10, 130, .7)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 5,
                        pointHitRadius: 10,
                        data: [<?php while ($b = mysqli_fetch_array($log_sensor2)) {
                                    echo  $b['sensor2'] . ',';
                                } ?>],
                    },
                    {
                        label: "Sensor3",
                        fill: true,
                        lineTension: 0.1,
                        backgroundColor: "rgba(0, 137, 102, .2)",
                        borderColor: "rgba(0, 10, 100, .7)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(0, 10, 100, .7)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(0, 10, 100, .7)",
                        pointHoverBorderColor: "rgba(0, 10, 100, .7)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 5,
                        pointHitRadius: 10,
                        data: [<?php while ($b = mysqli_fetch_array($log_sensor3)) {
                                    echo  $b['sensor3'] . ',';
                                } ?>],
                    }
                ]
            };

            var option = {
                showLines: true,
                animation: {
                    duration: 0
                }
            };

            var myLineChart = Chart.Line(canvas, {
                data: data,
                options: option
            });
        </script>
    </div>
</div>