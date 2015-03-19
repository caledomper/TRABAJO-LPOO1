<?php
$title = "Portada principal";
$css = array('style.css');
$js = array('functions.js');
require_once 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div id="carousel-example-generic" class="carousel slide img-thumbnail img-responsive" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="../public/img/banner_slider-1.jpg" alt=""/>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="../public/img/banner_slider-2.jpg" alt=""/>
                    </div>
                    <div class="item">
                        <img class="img-responsive" accesskey=""img-thumbnail src="../public/img/banner_slider-3.jpg" alt=""/>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-3 visible-lg">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    HAMACA DE MADERA
                </div>
                <div class="panel-body text-justify">
                    <p>Esta hamaca esta diseñada para trabajos pesados</p>
                    <p>Hecha con los mas altos estándares de calidad</p>
                    <p>Medidas: 1.20 x 2.10</p>
                    <img class="img-responsive" src="../public/img/banner_slider-3.jpg" alt=""/>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    CATEGORIAS
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                      Sala
                    </a>
                    <a href="#" class="list-group-item">Comedor</a>
                    <a href="#" class="list-group-item">Dormitorio</a>
                    <a href="#" class="list-group-item">Patio</a>
                    <a href="#" class="list-group-item">Almacenamiento</a>
                    <a href="#" class="list-group-item">Iluminacion</a>
                    <a href="#" class="list-group-item">Para Niñ@s</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    PUBLICIDAD
                </div>
                <div class="panel-body">
                    <img class="img-responsive" src="../public/img/logo.png" alt=""/>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    Iniciar Sesión
                </div>
                <div class="panel-body">
                    <form>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    FORMAS DE PAGO
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">VISA</a>
                    <a href="#" class="list-group-item active">MASTERCARD</a>
                    <a href="#" class="list-group-item">PAYPAL</a>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    PRODUCTOS
                </div> 
                <div class="panel-body">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body text-justify">
                              <p>Esta cama esta diseñada para trabajos pesados</p>
                              <p>Hecha con los mas altos estándares de calidad</p>
                              <p>Medidas: 1.20 x 2.10</p>
                              <img class="img-responsive" src="../public/img/banner_slider-1.jpg" alt=""/>
                            </div>
                            <div class="panel-footer text-center">
                                MESA DE MADERA
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body text-justify">
                              <p>Esta mesa esta diseñada para trabajos pesados</p>
                              <p>Hecha con los mas altos estándares de calidad</p>
                              <p>Medidas: 1.20 x 2.10</p>
                              <img class="img-responsive" src="../public/img/banner_slider-2.jpg" alt=""/>
                            </div>
                            <div class="panel-footer text-center">
                                CAMA DE MADERA
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body text-justify">
                              <p>Esta hamaca esta diseñada para trabajos pesados</p>
                              <p>Hecha con los mas altos estándares de calidad</p>
                              <p>Medidas: 1.20 x 2.10</p>
                              <img class="img-responsive" src="../public/img/banner_slider-3.jpg" alt=""/>
                            </div>
                            <div class="panel-footer text-center">
                                HAMACA DE MADERA
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>       
</div>    
    
    
    
    
<?php
require_once 'footer.php';
