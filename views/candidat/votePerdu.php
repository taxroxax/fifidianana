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
                    <li class="active">
                        <a href="vote-perdu"><i class="fa fa-fw fa-trash-o"></i>Vato maty </a>
                    </li>
                    <li>
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
                                <caption style="text-align: left;">Isan'ny vato maty : <?php if(isset($result)){echo count($result); } ?></caption>
                                <thead>
                                <th>Bileta N°</th>
                                <th>Vato maty</th>
                                <th>Ekipa</th>
                                <th>Fanamarihana</th>
                                </thead>
                                <tbody>
                                <?php foreach ($result as $r): ?>
                                    <tr>
                                        <td><?php echo $r->getCodeBulletin() ?></td>
                                        <td><?php echo $r->getStatusBulletin(); ?></td>
                                        <td><?php echo 'Equipa'.$r->getEquipeSaisie() ?></td>
                                        <td><?php echo $r->getComment(); ?></td>
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

</body>

</html>
