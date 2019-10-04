<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
<head>
    <title>Omniview | Sistema de rastreo y gestión de alarmas</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-skins/dark.css">

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSq9P5O_9Z025djqkKVY0uxtFSemASXD0" type="text/javascript"></script>

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.bootstrap.min.css" rel="stylesheet">

    <!-- pNotify -->
    <link href="<?=base_url()?>css/pnotify.custom.min.css" rel="stylesheet">

    <?php if(!empty($crud)) { foreach($crud->css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; } ?>

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
</head>

<body class="header-fixed header-fixed-space">
<div class="wrapper">
    <!--=== Header v6 ===-->
    <div class="header-v6 header-classic-white header-sticky">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand">
                        <a href="<?=base_url()?>front">
                            <img class="shrink-logo" src="<?=base_url()?>assets/img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->

                    <!-- Header Inner Right -->
                    <div class="header-inner-right">
                        <ul class="menu-icons-list">
                            <li class="menu-icons">
                                <a href="<?=base_url()?>logout"><i class="menu-icons-style icon-logout fa fa-sign-out"></i></a>
                            </li>
                            <li class="menu-icons">
                                <a href="<?=base_url()?>users/edit/<?=$this->session->userdata('idUser')?>"><i class="menu-icons-style icon-user fa fa-user"></i><?=$this->session->userdata('name')?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Header Inner Right -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav">

                            <li>
                                <a href="<?=base_url()?>front">
                                    Inicio
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    Alarmas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url()?>front/waiting">En espera</a></li>
                                    <li><a href="<?=base_url()?>front/attending">En atención</a></li>
                                    <li><a href="<?=base_url()?>front/attended">Atendidas</a></li>
                                    <li><a href="<?=base_url()?>front/canceled">Canceladas</a></li>
                                    <li><a href="<?=base_url()?>front/all">Todas</a></li>
                                </ul>
                            </li>
                            <?php  if( mb_strtoupper($this->session->userdata('profile')) == 'ADMIN' ) { ?>
                            <li class="dropdown ">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    Configuración
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url()?>tenants">Tenants</a></li>
                                    <li><a href="<?=base_url()?>users">Usuarios</a></li>
                                    <li><a href="<?=base_url()?>routers">Routers</a></li>
                                    <li><a href="<?=base_url()?>units">Unidades</a></li>
                                    <li><a href="<?=base_url()?>cameras">Cámaras</a></li>
                                    <li><a href="<?=base_url()?>log">Log</a></li>
                                    <li><a href="<?=base_url()?>sessions">Sesiones</a></li>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div><!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v6 ===-->