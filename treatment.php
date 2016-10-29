<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>San Humberto</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Control Becerritas
                    </a>
                </li>
                <li>
                    <a href="index.php">Becerritas</a>
                </li>
<!--
                <li>
                    <a href="vaccine.php">Vacunas</a>
                </li>
                <li>
                    <a href="treatment.php">Tratamientos</a>
                </li>
                <li>
                    <a href="rep.php">Reproducciones</a>
                </li>
                <li>
                    <a href="desp.php">Desparacitaciones</a>
                </li>
-->
                <li>
                    <a href="view/newcow.php">Nueva Becerra</a>
                </li>
<!--
                <li>
                    <a href="view/newvaccine.php">Nueva Vacuna</a>
                </li>
                <li>
                    <a href="view/newtreat.php">Nuevo Tratamiento</a>
                </li>
                <li>
                    <a href="view/newrep.php">Nueva Reproduccion</a>
                </li>
                <li>
                    <a href="view/newdesp.php">Nueva Desparacitacion</a>
-->
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Becerritas</h1>
                        <p>
                        
                            <?php 
                                include_once("controller/Controller.php");

                                $controller = new Controller();
                                $controller->tratamientos();
                            ?>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
