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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

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
                    <a href="../index.php">Becerritas</a>
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
                </li>
-->
            </ul>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Nueva Becerra</h1>
                           <form id="loginForm"  action = "../model/newCow.php" method = "post" class="form-group">	
                            <div class="form-group">
                                <label for="plastico">ID Plastico</label>
                                <input type="text" class="form-control" name="plastico" id="plastico">
                            </div>
                            <div class="form-group">
                                <label for="metal">ID Metal</label>
                                <input type="text" class="form-control" name="metal" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="nac" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">ID Madre</label>
                                <input type="text" class="form-control" name="madre" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Nombre Padre</label>
                                <input type="text" class="form-control" name="padre" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Registro Padre</label>
                                <input type="text" class="form-control" name="reg" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Atendio Parto</label>
                                <input type="text" class="form-control" name="atend" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Hora de Parto</label>
                                <input type="time" class="form-control" name="hora" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Tipo de Parto</label>
                                <input type="text" class="form-control" name="tipo" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Calidad de Calostro</label>
                                <input type="text" class="form-control" name="calidad" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Proteina</label>
                                <input type="text" class="form-control" name="prote" id="metal">
                               </div>
                               <div class="form-group">
                                <label for="metal">Observaciones</label>
                                <input type="text" class="form-control" name="obs" id="metal">
                               </div>
                               
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>


</body>

</html>
