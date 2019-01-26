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
    <script src="../assets/customjs/jquery.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .panell{
            display:flex;
        }
    </style>
    <script type="text/javascript">

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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'] ?> <b
                    class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="logout"><i class="fa fa-fw fa-power-off"></i> Hiala </a>
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
                <li class="active">
                    <a href="resultat"><i class="fa fa-fw fa-bar-chart-o "></i>Valiny</a>
                </li>
                <li>
                    <a href="resultat"><i class="fa fa-fw fa-dashboard"></i>Fanovana</a>
                </li>
            <?php endif;?>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
      <!--  <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    FIFIDIANANA DIAKONA

                </h1>
            </div>
        </div>-->
        <!-- /.row -->
        <form id="frmChoix" action="bulletin/save" method="post">
            <div class="row">
                <?php foreach ($quartier as $q) : ?>

                    <div class="col-lg-6 col-md-6" id="faritra<?php echo $q; ?>">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <?php foreach($contrainte[$q-1] as $c): ?>
                                            <?php if($c->getGenre() == "L" ): ?>
                                                <?php $nombreMale = $c->getNombreMax();  ?>
                                            <?php endif; ?>
                                            <?php if($c->getGenre() == "V" ): ?>
                                                <?php $nombreFemelle = $c->getNombreMax();  ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <button type="button" class="btn btn-xs btn-success" id="nombre_femelle" >Vavy : (<?php echo $nombreFemelle; ?> isa)
                                        <button type="button" class="btn btn-xs btn-info" id="nombre_male">Lahy : (<?php echo $nombreMale; ?> isa) </button>
                                       <!-- <br>
                                         <i class="fa fa-comments fa-3x">mihoatra</i>-->
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $q; ?></div>
                                        <div>FARITRA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php foreach ($genre as $g): ?>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <?php foreach ($list[$q][$g] as $candidat): ?>
                                                <div class="col-md-1 col-sm-1 col-xs-1">
                                                    <?php echo $candidat->getGenre() . $candidat->getRang(); ?>
                                                    <input id="max_checked_<?php echo $g;?><?php echo $q;?>" name="status[<?php echo $q;?>][<?php echo $candidat->getId();?>]"
                                                        type="checkbox">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <a href="#faritra<?php echo $q+1; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Manaraka</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input autocomplete="off" type="text" placeholder="CODE" name="code" class="form-control">
                    </div>

                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary" type="submit">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
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

</body>

</html>
