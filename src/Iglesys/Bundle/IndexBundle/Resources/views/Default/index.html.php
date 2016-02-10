<!DOCTYPE HTML>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema CCVM Online">
    <meta name="author" content="Daniel Futrille">
    <title>I.V.M Online</title>
    <!-- Bootstrap Core CSS -->
    <link href="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="/iglesys/web/themes/sb-admin-2-1.0.8/dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/iglesys/web/themes/sb-admin-2-1.0.8/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-ng-app="iglesys">
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
            </button>
            <a class="navbar-brand" href="/iglesys/web/app_dev.php/index">I.V.M. Online 1.0</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraci&oacute;n</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="/iglesys/web/app_dev.php/index"><i class="fa fa-dashboard fa-fw"></i> Monitor</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Ganados<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Consultar</a>
                            </li>
                            <li>
                                <a href="#">Registrar</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        {{ 4 * 2 }}
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- AngularJS -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.2/angular.min.js"></script>-->
<script src="/iglesys/web/js/angular/angular.min.js"></script>
<script src="/iglesys/web/js/angular/angular-route.min.js"></script>

<script src="/iglesys/web/js/app.js"></script>

<!-- jQuery -->
<script src="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/raphael/raphael-min.js"></script>
<script src="/iglesys/web/themes/sb-admin-2-1.0.8/bower_components/morrisjs/morris.min.js"></script>
<script src="/iglesys/web/themes/sb-admin-2-1.0.8/js/morris-data.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/iglesys/web/themes/sb-admin-2-1.0.8/dist/js/sb-admin-2.js"></script>
</body>

</html>