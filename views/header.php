<?php
include '../application/config.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php if (isset($title)) { echo $title; } else { echo "default"; } ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="<?php echo BASE_HTTP; ?>public/img/favicon.png" />
        <link rel="stylesheet" href="<?php echo BASE_HTTP; ?>public/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo BASE_HTTP; ?>public/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo BASE_HTTP; ?>public/css/style.css">
        <link rel="stylesheet" href="<?php echo BASE_HTTP; ?>public/css/headerstyle.css">
        <?php
         if (isset($css)) {
             foreach ($css as $file) {
        ?>
        <link rel="stylesheet" href="<?php echo BASE_HTTP; ?>public/css/<?php echo $file; ?>">
        <?php
             }
         }
        ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4  col-sm-4 hidden-xs">
                        <div class="well logo text-center">
                            <a href="#">
                                    Industrial <span>Servimax</span>
                            </a>
                            <div class="text-center">Soluciones en madera</div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                        <div class="well">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control input-search" placeholder="Ingresa algo para buscar">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="well">
                            <div class="btn-group btn-group-cart">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
                                    <span class="pull-left">Carrito de Compras: 2 item(s)</span>
                                    <span class="pull-right"><i class="fa fa-caret-down"></i></span>
                                </button>
                                <ul class="dropdown-menu cart-content" role="menu">
                                    <li>
                                        <a href="#">
                                            <b>Mueble de madera para sala</b>
                                            <span>x1 $528.96</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <b>Silla estilo moderno</b>
                                            <span>x1 $428.96</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Total: $957.92</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>    
        <nav class="navbar navbar-default" role="navigation">    
            <div class="container">
                <!-- El logotipo y el icono que despliega el menú se agrupan
                para mostrarlos mejor en los dispositivos móviles -->
            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Desplegar navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-lg hidden-sm hidden-md" href="#">INDUSTRIAL SERVIMAX E.I.R.L.</a>

                </div>

                <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                otro elemento que se pueda ocultar al minimizar la barra -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Catalogo</a></li>
                        <li><a href="#">Contactenos</a></li>
                    </ul>
                </div>
            </div>    
        </nav>