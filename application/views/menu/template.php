<?php $ruta = base_url(); ?>
<!DOCTYPE html>
<html class="no-js" lang="es">
    
    <head>
        <meta charset="UTF-8">
        <title>SISTEMA COLEGIO</title>
        <!-- Bootstrap -->
        <link href="<?php echo $ruta;?>recursos/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $ruta;?>recursos/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $ruta;?>recursos/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo $ruta;?>recursos/assets/styles.css" rel="stylesheet" media="screen">
        <link href="<?php echo $ruta;?>recursos/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo $ruta;?>recursos/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Seccion Scripts -->
        <script src="<?php echo $ruta;?>recursos/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/js/bootstrap.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/scripts.js"></script>
        <script src="<?php echo $ruta;?>recursos/vendors/bootstrap-datepicker.js"></script>
        <script src="<?php echo $ruta;?>recursos/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $ruta;?>recursos/assets/DT_bootstrap.js"></script>


        <script>
            
        </script>

    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo $ruta;?>menu/">SISTEMA COLEGIO</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Administrador <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Perfil</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo $ruta;?>logout/">Cerrar Sessi&oacute;n</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="<?php echo $ruta;?>menu/">INICIO</a>
                            </li>
                            <?php 
                                if(count($lista_roles)>0): ?>
                                    <?php foreach($lista_roles as $r): ?>
                                        <?php if($r->nivel==1 && ascii_to_entities($r->descp)!="INICIO"): ?>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle" >
                                                <?php echo ascii_to_entities($r->descp);?><b class="caret"></b></a>
                                                <!-- cargando segundo nivel -->
                                                    <ul class="dropdown-menu">
                                                        <?php foreach($lista_roles as $r1): ?>
                                                            <?php if( $r->id == $r1->identificador ) : ?>
                                                                <li>
                                                                    <a tabindex="-1" href="<?php echo $ruta.$r1->varpath;?>">
                                                                        <?php echo ascii_to_entities($r1->descp); ?>
                                                                    </a>
                                                                </li>
                                                            <?php endif;?>
                                                        <?php endforeach;?>
                                                    </ul>
                                                <!-- ----------------------  -->
                                            </li>
                                        <?php endif;?>
                                    <?php endforeach;?>
                            <?php
                                endif;
                            ?>
                            <!--<li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">GESTI&Oacute;N MATRICULAS <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li class="dropdown-submenu">
                                        <a href="#">Alumno</a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Registro</a>
                                            </li>
                                            <li>
                                                <a href="#">Bitacora</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Matricula</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Reporte Matricula</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">GESTI&Oacute;N HORARIOS <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Ambientes</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Secciones</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Asignacion Seccion-Ambiente</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Programar Horario</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">Reporte de Horarios</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">GESTI&Oacute;N NOTAS <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Mantenedor Notas</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">Reportes Notas Por Curso</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Reportes Notas Por Alumno</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">GESTI&Oacute;N PAGOS <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Servicios</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Pagos</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">Reporte de Pagos</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">SOPORTE <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li >
                                        <a tabindex="-1" href="<?php echo $ruta;?>colegio/" >Colegio</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Plan de Estudio</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo $ruta;?>administrativo/">Administrativos</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo $ruta;?>docente/" >Docentes</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Usuario</a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Registro</a>
                                            </li>
                                            <li>
                                                <a href="#">Perfil</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                
                <div class="span12" id="content">
                    <div id="contenido"></div>
                    <?php echo $cuerpo; ?>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; UCV TRUJILLO</p>
            </footer>
        </div>
        <!--/.fluid-container-->
       
        

    </body>

</html>