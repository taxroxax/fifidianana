<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../assets/img/AHebrona.png" rel="icon">

    <title>FIANGONANA ANISOZATO HEBRONA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

            window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Fifidianana diakona 2019"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                   // yValueFormatString: "##0.00\"%\"",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        <?php foreach($result as $r): ?>
                        {y:<?php echo $r['vote'] ?>, label: "<?php echo $r['candidat']->getNom() ?>"},
                        <?php endforeach; ?>
                    ]
                }]
            });
            chart.render();

                var chart2 = new CanvasJS.Chart("chartContainerHisto", {
                    animationEnabled: true,
                    theme: "light2", // "light1", "light2", "dark1", "dark2"
                    title:{
                        text: "Fifidianana diakona 2019"
                    },
                    data: [{
                        type: "column",
                        legendMarkerColor: "grey",
                        dataPoints: [
                            <?php foreach($result as $r): ?>
                            {y:<?php echo $r['vote'] ?>, label: "<?php echo $r['candidat']->getNom() ?>"},
                            <?php endforeach; ?>
                        ]
                    }]
                });
                chart2.render();


              /*  var chart3 = new CanvasJS.Chart("chartContainerPulman", {
                    animationEnabled: true,
                    theme: "light2", //"light1", "dark1", "dark2"
                    title:{
                        text: "Valim-pifidianana Diakona - 2019"
                    },
                    data: [{
                        type: "funnel",
                        indexLabelPlacement: "inside",
                        indexLabelFontColor: "white",
                        dataPoints: [
                           eto ny data rehetra no miditra
                        ]
                    }]
                });
                calculatePercentage();
                chart3.render();

                function calculatePercentage() {
                    var dataPoint = chart3.options.data[0].dataPoints;
                    var total = dataPoint[0].y;
                    for(var i = 0; i < dataPoint.length; i++) {
                        if(i == 0) {
                            chart3.options.data[0].dataPoints[i].percentage = 100;
                        } else {
                            chart3.options.data[0].dataPoints[i].percentage = ((dataPoint[i].y / total) * 100).toFixed(2);
                        }
                    }
                }
*/
            }
    </script>
</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo \App\Web\Config::BASE_URL.'/'; ?>">
            <small>
                <img width="80%" height="35px" src="../assets/img/Logo.png" />
            </small>
        </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> RAJAONARILALA Tahinasoa <b
                    class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Hiala</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="<?php echo \App\Web\Config::BASE_URL.'/'; ?>"><i class="fa fa-fw fa-check-circle-o"></i> Fifidianana</a>
            </li>
            <li class="active">
                <a href="resultat"><i class="fa fa-fw fa-dashboard"></i>Valim-pifidianana</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    VALIM-PIFIDIANANA
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ANARANA</th>
                            <th>FARITRA</th>
                            <th>VATO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $r): ?>
                        <tr>
                            <td><?php echo $r['candidat']->getNom() ?></td>
                            <td> <?php echo $r['candidat']->getCodeQuartier() ?></td>
                            <td><?php echo $r['vote'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Fanehoana an-tsary ny vokatra</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-pie-chart">
                                <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="#">Fanazavana fanampiny <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Fanehoana an-tsary histogramme ny vokatra</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-pie-chart">
                                <div id="chartContainerHisto" style="height: 400px; width: 100%;"></div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="#">Fanazavana fanampiny <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
       <!-- <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Fanehoana an-tsary ny vokatra</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-pie-chart">
                                <div id="chartContainerPulman" style="height: 1600px; width: 100%;"></div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="#">Fanazavana fanampiny <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="../assets/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../assets/js/plugins/morris/raphael.min.js"></script>
<script src="../assets/js/plugins/morris/morris.min.js"></script>
<script src="../assets/js/plugins/morris/morris-data.js"></script>

<!-- Flot Charts JavaScript -->
<!--[if lte IE 8]><script src="../assets/js/excanvas.min.js"></script><![endif]-->
<script src="../assets/js/plugins/flot/jquery.flot.js"></script>
<script src="../assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="../assets/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="../assets/js/plugins/flot/jquery.flot.pie.js"></script>
<script src="../assets/js/plugins/flot/flot-data.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>

</html>
