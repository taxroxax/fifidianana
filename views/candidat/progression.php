<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../assets/img/AHebrona.png" rel="icon">

    <title>FIANGONANA ANISIZATO HEBRONA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/css/loading-bar.css"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="#">
                <small>
                    <img width="80%" height="35px" src="../assets/img/Logo.png"/>
                </small>
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'] ?>
                    <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="logout"><i class="fa fa-fw fa-power-off"></i> Hiala</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <?php if(\strpos($_SESSION['username'], 'Ekipa') !== false): ?>
                    <li class="active">
                        <a href="<?php echo \App\Web\Config::BASE_URL.'/'; ?>"><i class="fa fa-fw fa-check-circle-o"></i> Fanisana</a>
                    </li>
                <?php  elseif(\strpos($_SESSION['username'], 'Komity') !== false): ?>
                    <li>
                        <a href="resultat-global"><i class="fa fa-fw fa-bar-chart-o "></i>Valiny</a>
                    </li>
                    <li>
                        <a href="vote-perdu"><i class="fa fa-fw fa-trash-o"></i>Vato maty </a>
                    </li>
                    <li class="active">
                        <a href="progression"><i class="fa fa-fw fa-arrow-circle-down"></i>Saisie</a>
                    </li>
                    <li>
                        <a href="edit"><i class="fa fa-fw fa-edit"></i>Fanovana</a>
                    </li>
                <?php endif;?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <caption>Isan'ny vita saisie isaky ny Ekipa</caption>
                            <thead>
                            <th>Ekipa</th>
                            <th>Vita</th>
                            <th>Tratrarina</th>
                            <th>Fanehoana</th>
                            </thead>
                            <tbody>
                            <?php foreach ($list as $r): ?>
                                <?php
                                $pourcentage = 0;
                                if(isset($r['compteur'])){
                                    $pourcentage = ($r['compteur'] * 100 / $r['input_number']);
                                }
                                ?>
                                <tr>
                                    <td><?php echo $r['name'] ?></td>
                                    <td><?php echo $r['compteur'] ?></td>
                                    <td><?php echo $r['input_number'] ?></td>
                                    <td width="40px"><div data-preset="stripe" class="ldBar label-center" data-value="<?php echo $pourcentage ?>" > <?php echo $pourcentage.' %' ?> </td>
                                </tr>
                            <?php endforeach ;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- /.row -->
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
<!--[if lte IE 8]>
<script src="../assets/js/excanvas.min.js"></script><![endif]-->
<script src="../assets/js/plugins/flot/jquery.flot.js"></script>
<script src="../assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="../assets/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="../assets/js/plugins/flot/jquery.flot.pie.js"></script>
<script src="../assets/js/plugins/flot/flot-data.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="../assets/customjs/loading-bar.js"></script>

</body>

</html>
