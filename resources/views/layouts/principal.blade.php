<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>ViviBien</title>
        <link rel="shortcut icon" type="image/x-icon" href="http://www.iconeasy.com/icon/png/Business/Or%20Application/archive.png">
    <!-- Bootstrap Core CSS -->
    {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}

    <!-- MetisMenu CSS -->
    {!! Html::style('vendor/metisMenu/metisMenu.min.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('dist/css/sb-admin-2.css') !!}

    <!-- Morris Charts CSS -->
    {!! Html::style('vendor/morrisjs/morris.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!}

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="{{url('/')}}">VIVI<b>BIEN</b></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                    @hasanyrole('Social|Superusuario|Financiero|Juridico')
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                                
                                
                             
                    <ul class="dropdown-menu dropdown-messages">
                        <!--
                            MESSAGES HERE
                            __________
                         -->
                        <li class="divider"></li>
                        
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    
                    <!-- /.dropdown-messages -->
                </li>
                @endhasanyrole
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                       <!--
                            TASKS HERE
                            __________
                         -->
                         <li class="divider"></li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i>{{ auth()->user()->name }}</i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
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
                        <li>
                            <a href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Catalogos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                                           



                                 @hasanyrole('Superusuario|Jefatura')
                                 <li>
                                    <a href="{{url('departamento')}}">Departamentos</a>
                                </li>
                                <li>
                                    <a href="{{url('desarrollador')}}">Desarrollador</a>
                                </li>
                                <li>
                                    <a href="{{url('destinosub')}}">Destino Subsidio</a>
                                </li>
                                <li>
                                    <a href="{{url('genero')}}">Genero</a>
                                </li>
                                <li>
                                    <a href="{{url('municipio')}}">Municipios</a>
                                </li>
                                
                                <li>
                                    <a href="{{url('relacionfam')}}">Relacion Familiar</a>
                                </li>
                                <li>
                                    <a href="{{url('requisito')}}">Requisitos</a>
                                </li>
                                <li>
                                    <a href="{{url('rol')}}">Rol</a>
                                </li>
                                <li>
                                    <a href="{{url('telefono')}}">Telefono</a>
                                </li>
                                <li>
                                    <a href="{{url('tipoaccion')}}">Tipo de Acción</a>
                                </li>
                                <li>
                                    <a href="{{url('tipoingreso')}}">Tipo de Ingreso</a>
                                </li>
                                <li>
                                    <a href="{{url('tipotelefono')}}">Tipo de Telefono</a>
                                </li>
                                <li>
                                    <a href="{{url('unidadtrabajo')}}">Unidad de Trabajo</a>
                                </li>
                                <li>
                                    <a href="{{url('usuario')}}">Usuarios</a>
                                </li>
                                 
                                 @else 
                                 
                                @endhasanyrole
                                
                                

                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i>Solicitudes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            @hasanyrole('Basico|Superusuario|Jefatura')
                                <li>
                                    <a href="{{url('proyecto')}}">Proyectos</a>
                                </li>
                                @else 
                                
                             @endhasanyrole
                             @hasanyrole('Recepcion|Superusuario|Jefatura')
                                <li>
                                    <a href="{{url('personal/create')}}">Solicitud Persona</a>
                                </li>
                                <li>
                                        <a href="{{url('first')}}">Solicitud Grupo</a>
                                    </li>
                                @else 
                                
                             @endhasanyrole
                            </ul>

                        </li>

                            


                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i>Diligencias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            @hasanyrole('Social|Superusuario')
                                <li>
                                    <a href="{{url('proyecto')}}">Social</a>
                                </li>
                                @else 
                                
                             @endhasanyrole

                             @hasanyrole('Financiero|Superusuario')
                                <li>
                                    <a href="{{url('expediente')}}">Financiero</a>
                                </li>
                                @else 
                                
                             @endhasanyrole

                             @hasanyrole('Juridico|Superusuario')
                                <li>
                                    <a href="{{url('expediente')}}">Juridico</a>
                                </li>
                                @else 
                                
                             @endhasanyrole
                            </ul>

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

        @yield('content')
        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {{ HTML::script('vendor/jquery/jquery.min.js') }}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('vendor/bootstrap/js/bootstrap.min.js') }}

    <!-- Metis Menu Plugin JavaScript -->
    {{ HTML::script('vendor/metisMenu/metisMenu.min.js') }}

    <!-- Custom Theme JavaScript -->
    {{ HTML::script('dist/js/sb-admin-2.js') }}

</body>

</html>
